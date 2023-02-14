<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Post';
$currentUserId = 1;

$post = $db->query('SELECT * FROM posts WHERE id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

require 'views/post.view.php';