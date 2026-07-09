<?php
/**
 * Converts all JPEG/PNG images in assets/models/momine-xatun/ to WebP (quality 82).
 * Run from project root: php tools/convert_momine_xatun_webp.php
 *
 * Requires PHP GD with WebP support (imagewebp).
 */

declare(strict_types=1);

$root = dirname(__DIR__);
$dir = $root . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . 'momine-xatun';

if (!is_dir($dir)) {
    fwrite(STDERR, "Directory not found: {$dir}\n");
    exit(1);
}

if (!function_exists('imagewebp')) {
    fwrite(STDERR, "GD WebP support missing: imagewebp() is not available. Enable gd with WebP in php.ini.\n");
    exit(1);
}

$quality = 82;
$converted = 0;
$skipped = 0;

$iterator = new DirectoryIterator($dir);
foreach ($iterator as $file) {
    if ($file->isDot() || !$file->isFile()) {
        continue;
    }

    $ext = strtolower($file->getExtension());
    if (!in_array($ext, ['jpg', 'jpeg', 'png'], true)) {
        continue;
    }

    $srcPath = $file->getPathname();
    $destPath = $file->getPath() . DIRECTORY_SEPARATOR . $file->getBasename('.' . $file->getExtension()) . '.webp';

    $image = match ($ext) {
        'jpg', 'jpeg' => @imagecreatefromjpeg($srcPath),
        'png' => @imagecreatefrompng($srcPath),
        default => false,
    };

    if ($image === false) {
        fwrite(STDERR, "Skip (could not load): {$srcPath}\n");
        $skipped++;
        continue;
    }

    if ($ext === 'png') {
        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);
    }

    if (!imagewebp($image, $destPath, $quality)) {
        imagedestroy($image);
        fwrite(STDERR, "Failed to write: {$destPath}\n");
        $skipped++;
        continue;
    }

    imagedestroy($image);
    echo "OK: {$destPath}\n";
    $converted++;
}

echo "\nDone. Converted: {$converted}, skipped/errors: {$skipped}\n";
