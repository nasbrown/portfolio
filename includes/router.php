<?php

declare(strict_types=1);

const ALLOWED_METHODS =['GET', 'POST'];
const INDEX_URI = '';

function normalizeuri(string $uri): string{
    $uri = strtolower(trim($uri, '/'));

    return $uri === INDEX_URI ? 'index' : $uri;
};

function dispatch(string $uri, string $method): void{
    $uri = normalizeuri($uri); //get clean urls
}