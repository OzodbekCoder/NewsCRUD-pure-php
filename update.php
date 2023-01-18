<?php
require_once 'config/bootstrap.php';
$id = $_GET['id'];
$post = Post::getById($id);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $result = Post::update($id, $title, $body);
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
    <title>Taxrirlash</title>
</head>

<body>
    <form method="POST" action="">
        <h5>Update Post</h5>
        <div>
            <input type="text" name="title" value="<?= $post->title ?>" style="width: 800px;">
        </div>
        <div>
            <textarea name="body" rows="10" cols="100" style="width: 800px;"><?= $post->about ?></textarea>
        </div>
        <div>
            <button type="submit">Taxrirlash</button>
        </div>
    </form>
</body>

</html>