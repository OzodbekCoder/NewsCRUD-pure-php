<?php
require_once 'autoload.php';
$connection = new Database('127.0.0.1', 'ishonch1.0', 'postgres', 'postgres');
$conn = $connection->connect();
Post::$pdo = $conn; 