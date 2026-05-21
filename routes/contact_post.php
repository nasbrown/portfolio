<?php

//CSRF

$name = $_POST['name'] ?? '';

$email = $_POST['email'] ?? '';

$message = $_POST['message'] ?? '';

if(empty($name) || empty($message) || empty($email)){
    badRequest('All fields are required.');
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    badRequest("Email filled isn't valid, please try again.");
}

$inserted = insertMessages(connect(), name: $name, email: $email, message: $message);

if($inserted){
    $safeName =htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    echo "Thank you, $safeName for your message! It was stored.";
    exit;
}
serverError('Could not store the message, Sorry.');