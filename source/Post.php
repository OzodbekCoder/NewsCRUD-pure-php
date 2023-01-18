<?php
class Post
{
    public static $pdo;
    public $id;
    public $title;
    public $body;
    public $by_who;

    public static function getAll()
    {
        $sql = self::$pdo->prepare("SELECT * FROM posts ORDER BY id DESC");
        $sql->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $sql->execute();
        return $sql = $sql->fetchAll();
    }
    public static function getById($id)
    {
        $sql = self::$pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $sql->setFetchMode(PDO::FETCH_CLASS, 'Post');
        $sql->execute([$id]);
        return $sql = $sql->fetch();
    }
    public static function create($title, $body)
    {
        $sql = self::$pdo->prepare("INSERT INTO posts (title, about) VALUES(:title , :body)");
        $sql->execute([
            'title' => $title,
            'body' => $body
        ]);
        $row = $sql->rowCount();
        return $row;
    }
    public static function update($id, $title, $body)
    {
        $sql = self::$pdo->prepare("UPDATE posts SET title = :title, about = :body  WHERE id = :id");
        $sql->bindParam(':title', $title);
        $sql->bindParam(':body', $body);
        $sql->bindParam(':id', $id);
        $sql->execute();
        $row = $sql->rowCount();
        return $row;
    }
    public static function delete($id)
    {
        $sql = self::$pdo->prepare("DELETE FROM posts WHERE id = ?");
        $sql->execute([$id]);
        return 1;
    }
}
