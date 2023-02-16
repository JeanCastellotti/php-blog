<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$post = $db->query('SELECT * FROM posts WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

view('posts/show.view.php', [
    'post' => $post
]);