<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Posts';

$posts = $db->query('SELECT * FROM posts WHERE user_id = 1')->fetchAll();

require 'views/posts.view.php';