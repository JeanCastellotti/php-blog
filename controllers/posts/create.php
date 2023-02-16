<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if (! Validator::string($_POST['title'], 1, 150)) {
        $errors['title'] = 'A title is required';
    }

    if (! Validator::string($_POST['content'], 1, 500)) {
        $errors['content'] = 'A content is required';
    }

    if (strlen($_POST['content']) > 500) {
        $errors['content'] = 'The content can not be more than 500 characters';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)', [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'user_id' => 1
        ]);
    }

}

require 'views/posts/create.view.php';