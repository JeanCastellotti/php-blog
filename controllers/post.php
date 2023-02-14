<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Post';

$post = $db->query('SELECT * FROM posts WHERE id = :id', [
    'id' => $_GET['id']
])->fetch();

require 'views/post.view.php';