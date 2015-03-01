<?php
// Data access
$bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'microcms_user', 'secret');
$articles = $bdd->query('select * from t_article order by art_id desc');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>MicroCMS</title>
</head>
<body>
    <header>
        <h1>MicroCMS - Afficher les articles</h1>
    </header>
    <?php foreach ($articles as $article): ?>
        <article>
            <h2><?php echo $article['art_title'] ?></h2>
            <p><?php echo $article['art_content'] ?></p>
        </article>
    <?php endforeach ?>
    <footer class="footer">
        <a href="https://github.com/bpesquet/OC-MicroCMS">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP development.
    </footer>
</body>
</html>
