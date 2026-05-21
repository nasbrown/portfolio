<?php

$messages = $data['messages'];

?>

<section>
    <h2>Guest Messages</h2>
    <?php if(empty($messages)): ?>
        <p>There are no messages here yet.. Please leave a message!</p>
    <?php else: ?>
        <?php foreach($messages as $message): ?>
            <h3>User : <?= htmlspecialchars($message['name']) ?></h3>
            <p>Email : <?= htmlspecialchars($message['email']) ?></p>
            <p>Message : <?= nl2br(htmlspecialchars($message['message'])) ?></p>
            <small>Posted on: <?= htmlspecialchars($message['created_at']) ?></small>
        <?php endforeach; ?>
    <?php endif; ?>
</section>