<?php

declare(strict_types=1);

const ALLOWED_METHODS =['GET', 'POST'];
const INDEX_URI = '';
const INDEX_ROUTE = 'index';

function normalizeuri(string $uri): string{
    $uri = strtok($uri, '?');
    $uri = strtolower(trim($uri, '/'));

    return $uri === INDEX_URI ? INDEX_ROUTE : $uri;
};

function getFilePath(string $uri, string $method): string{
    return ROUTES_DIR . '/' . normalizeuri($uri) . '_' . strtolower($method) . '.php'; //Gives us routes/uri/page.php
}

function notFound(): void{
    http_response_code(404);

    echo "404 not found";

    exit;
}

function badRequest(string $message = 'Bad request'): void{
    http_response_code(400);

    echo $message;

    exit;
}

function serverError(string $message = 'Server Error'): void{
    http_response_code(500);

    echo $message;

    exit;
}

function redirect(string $uri): void {
    header("Location: $uri");
    exit;
}

function dispatch(string $uri, string $method): void{
    $uri = normalizeuri($uri); //get clean urls
    $method = strtoupper($method); //make sure method is uppercase either Get or Post

    if(!in_array($method, ALLOWED_METHODS)){
        //Return a 404 because it is not a method we are using
        notFound();
    }

    $filePath = getFilePath($uri, $method);

    if(file_exists($filePath)){
        include($filePath);
        return;
    }

    notFound();

}