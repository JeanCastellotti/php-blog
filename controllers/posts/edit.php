<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$post = $db->query('SELECT * FROM posts WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

view('/posts/edit.view.php', [
    'post' => $post,
    'errors' => []
]);
