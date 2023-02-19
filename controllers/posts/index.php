<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$posts = $db->query('SELECT * FROM posts WHERE user_id = 1')->get();

view('posts/index.view.php', [
  'posts' => $posts
]);
