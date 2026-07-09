<?php

function resolve_public_image(string $relativePath): string
{
    $root = dirname(__DIR__);
    $normalized = str_replace('\\', '/', $relativePath);
    if (!preg_match('/\.(jpe?g|png)$/i', $normalized)) {
        return $relativePath;
    }
    $webp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $normalized);
    if (is_file($root . '/' . $webp)) {
        return $webp;
    }
    return $relativePath;
}

function public_asset_exists(string $relativePath): bool
{
    $root = dirname(__DIR__);
    $normalized = str_replace('\\', '/', $relativePath);

    return is_file($root . '/' . $normalized);
}
