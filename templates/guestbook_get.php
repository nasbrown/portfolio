<?php

function obName(string $name): string{
    if(strlen($name) <= 2){
        return $name;
    }

    return substr($name, 0, 1) . str_repeat('*', 
    strlen($name) - 2) . substr($name, -1);
    }

function obEmail(string $email): string{
    $parts = explode('@', $email);
    $username = $parts[0];
    $domain = $parts[1] ?? '';
    $username = substr($username, 0, 2) . str_repeat('*', 
    max(0, strlen($username) - 2));

    return "$username@$domain";
}


$messages = $data['messages'];

?>

<section>
    <h2>Guest Messages</h2>
    <?php if(empty($messages)): ?>
        <p>There are no messages here yet.. Please leave a message!</p>
    <?php else: ?>
        <?php foreach($messages as $message): ?>
            <h3>User : <?= obName(htmlspecialchars($message['name'])) ?></h3>
            <p>Email : <?= obEmail(htmlspecialchars($message['email'])) ?></p>
            <p>Message : <?= nl2br(htmlspecialchars($message['message'])) ?></p>
            <small>Posted on: <?= htmlspecialchars($message['created_at']) ?></small>
        <?php endforeach; ?>
    <?php endif; ?>
</section>