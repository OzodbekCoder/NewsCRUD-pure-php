<?php
require_once 'config/bootstrap.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $result = Post::create($title, $body);
    if ($result) {
        header("Location: index.php");
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Create Post</title>
</head>

<body>
    <form method="POST" action="">
        <h5>Create Post</h5>
        <div>
            <input type="text" name="title" value="" placeholder="Sarlavha" style="width: 800px;">
        </div>
        <div>
            <textarea name="body" rows="10" cols="100" placeholder="Maqola" style="width: 800;"></textarea>
        </div>
        <div>
            <button type="submit">Qo'shish</button>
        </div>
    </form>
</body>

</html>