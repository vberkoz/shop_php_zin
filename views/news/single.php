<html>
    <head>
        <title>Shop PHP Zin</title>
    </head>
    <body>
        <h2>Shop PHP Zin</h2>

        <div>
            <h1><?php echo $newsItem['title'] ?></h1>
            <em><b><?php echo $newsItem['author'] ?></b> | Created at: <?php echo $newsItem['created_at'] ?></em>
            <p><?php echo $newsItem['content'] ?></p>
            <a href="/news">Back to news</a><br><br>
        </div>
    </body>
</html>