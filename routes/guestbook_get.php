<?php

$messages = getMessages(connect());

renderView(
    template:'guestbook_get', 
    data: ['messages' => $messages]
);//Can use compact  but it's not explicit