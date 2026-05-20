<?php

declare(strict_types=1);

const ALLOWED_METHODS =['GET', 'POST'];
const INDEX_URI = '';
const INDEX_ROUTE = 'index';

function normalizeuri(string $uri): string{
    $uri = strtolower(trim($uri, '/'));

    return $uri === INDEX_URI ? INDEX_ROUTE : $uri;
};

function notFound(): void{
    http_response_code();

    echo "404 not found";

    exit;
}

function dispatch(string $uri, string $method): void{
    $uri = normalizeuri($uri); //get clean urls
    $method = strtoupper($method); //make sure method is uppercase either Get or Post

    if(!in_array($method, ALLOWED_METHODS)){
        //Return a 404 because it is not a method we are using
        notFound();
    }


}