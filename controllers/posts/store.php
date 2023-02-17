<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];

if (!Validator::string($_POST['title'], 1, 150)) {
    $errors['title'] = 'A title is required';
}

if (!Validator::string($_POST['content'], 1, 500)) {
    $errors['content'] = 'A content is required';
}

if (!empty($errors)) {
    return view('/posts/create.view.php', [
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)', [
    'title' => $_POST['title'],
    'content' => $_POST['content'],
    'user_id' => 1
]);

header('location: /posts');
die();
