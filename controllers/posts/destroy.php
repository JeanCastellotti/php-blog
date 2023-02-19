<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

$post = $db->query('SELECT * FROM posts WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

$db->query('DELETE FROM posts WHERE id = :id', [
    'id' => $_POST['id']
]);

header('location: /posts');
die();
