<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = $db->query('SELECT * FROM posts WHERE id = :id', [
        'id' => $_POST['id']
    ])->findOrFail();

    authorize($post['user_id'] === $currentUserId);

    $db->query('DELETE FROM posts WHERE id = :id', [
        'id' => $_POST['id']
    ]);

    header('location: /posts');
    die();
} else {
    $post = $db->query('SELECT * FROM posts WHERE id = :id', [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($post['user_id'] === $currentUserId);

    view('posts/show.view.php', [
        'post' => $post
    ]);
}
