<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>MicroCMS</title>
</head>
<body>
    <header>
        <h1>MicroCMS - Articles</h1>
    </header>

<?php foreach ($articles as $article): ?>
<article>
    <h2><?php echo $article->getTitle() ?></h2>
    <p><?php echo $article->getContent() ?></p>
</article>
<?php endforeach ?>
    <footer class="footer">
        <a href="https://github.com/bpesquet/OC-MicroCMS">MicroCMS</a> is a minimalistic CMS built as a showcase for modern PHP development.
    </footer>
</body>
</html>
