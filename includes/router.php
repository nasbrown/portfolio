<?php

declare(strict_types=1);

function normalizeuri(string $uri): string{
    $uri = strtolower(trim($uri, '/'));

    return $uri === '' ? 'index' : $uri;
};

function dispatch(string $uri, string $method): void{
    $uri = normalizeuri($uri); //get clean urls
}