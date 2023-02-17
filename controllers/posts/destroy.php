<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

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
