<?php
require_once 'config/bootstrap.php';
$posts = Post::getAll();
//var_dump($posts);
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" type="image/x-icon" href="config/ico.jpg">

<head>
    <title>My HTML Page</title>
</head>

<body>
    <h1>
        <?php
        date_default_timezone_set("Asia/Tashkent");
        echo "TODAY: " . date('l') . PHP_EOL . date('H:i:s')
        ?>
    </h1>
    <a href="create.php">Yangi maqola yaratish</a>
    <p>Bizda yangiliklar.</p>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li>
                <a href="post.php?id=<?= $post->id ?>">
                    <h4><?= $post->id . '-' . $post->title ?>
                        <a href="update.php?id=<?= $post->id ?>">
                            <svg title="pencil" style="margin-left: 10px;" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="#000000" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a.996.996 0 000-1.41l-2.34-2.34a.996.996 0 00-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z">
                                </path>
                            </svg></a>
                        <a href="#" onclick="if(confirm('Are you sure you want to delete this item?')){window.location='delete.php?id=<?= $post->id ?>'}">
                            <svg title=" delete" viewBox="0 0 24 24" width="24" height="24">
                                <path fill="#000000" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14"></path>
                            </svg>
                        </a>

                    </h4>
                </a>
            </li>

        <?php endforeach ?>
    </ul>
</body>

</html>