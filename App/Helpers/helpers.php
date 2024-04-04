<?php

declare(strict_types=1);

// To use these helper files:
// either require this file every time or add file to composer autoload config file.
// In a framework, better wrap them with "if not existing" to avoid collision

// ============== General functions

function basePath(string $path)
{
    return __DIR__ . '/../' . $path;
}

function redirect($destination)
{
    header('Location: ' . $destination);
    exit(0);
}

// Simple template with variables, default template file
function view($content, $attributes = [], $template = 'template-full.php'): void
{
    extract($attributes);

    include(basePath('Views/' . $template));
}

// Make slug (or for class name)
function slugify($urlString): array|string|null
{
    $search = ['î', 'â', 'à', 'Î', 'ë', 'é', 'è', 'ê', 'Ë', 'Ê', 'É', 'È', 'ô', 'ù', 'û', 'ç'];
    $replace = ['i', 'a', 'a', 'i', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'o', 'u', 'u', 'c'];
    $str = str_ireplace($search, $replace, strtolower(trim($urlString)));
    $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
    $str = str_replace(' ', '-', $str);
    return preg_replace('/\-{2,}/', '-', $str);
}


// ============== Debug functions

function dd($value)
{
    // dump and die
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function dump($value)
{
    // var_dump
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

