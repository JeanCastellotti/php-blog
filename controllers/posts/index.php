<?php

use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);

$posts = $db->query('SELECT * FROM posts WHERE user_id = 1')->get();

view('posts/index.view.php', [
  'posts' => $posts
]);
