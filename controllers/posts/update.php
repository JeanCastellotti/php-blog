<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$post = $db->query('SELECT * FROM posts WHERE id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($post['user_id'] === $currentUserId);

$errors = [];

if (!Validator::string($_POST['title'], 1, 150)) {
    $errors['title'] = 'A title is required';
}

if (!Validator::string($_POST['content'], 1, 500)) {
    $errors['content'] = 'A content is required';
}

if (!empty($errors)) {
    return view('/posts/edit.view.php', [
        'errors' => $errors,
        'post' => $post
    ]);
}

$db->query('UPDATE posts set title = :title, content = :content WHERE id = :id', [
    'title' => $_POST['title'],
    'content' => $_POST['content'],
    'id' => $_POST['id']
]);

header('location: /posts');
die();
