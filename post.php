<?php
require_once 'config/bootstrap.php';
$postId = $_GET['id'];
$post = Post::getById($postId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>post<?= $postId ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Post <?= $postId ?></title>
</head>

<body>
    <div>
        <h1><?= $post->id . '-' . $post->title ?></h1>
        <p><?= $post->about ?></p>
        <small><?= $post->created_at ?></small>
    </div>
</body>

</html>