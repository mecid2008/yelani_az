<?php
function resolve_lang(array $allowed_langs, string $default = 'az'): string
{
    $lang = $_GET['lang'] ?? $default;
    if (!is_string($lang)) {
        return $default;
    }

    return in_array($lang, $allowed_langs, true) ? $lang : $default;
}
