<?php
require_once 'config/bootstrap.php';
$id = $_GET['id'];
$result = Post::delete($id);
if ($result) {
    header("Location: index.php");
    exit;
}
