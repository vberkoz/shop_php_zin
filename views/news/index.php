<html>
    <head>
        <title>Shop PHP Zin</title>
    </head>
    <body>
        <h1>Shop PHP Zin</h1>

        <?php foreach ($newsList as $item): ?>
        <div>
            <h2><?php echo $item['title'] ?></h2>
            <em>Created at: <?php echo $item['created_at'] ?></em>
            <p><?php echo $item['excerpt'] ?></p>
            <a href="/news/<?php echo $item['id'] ?>">Read more</a><br><br>
        </div>
        <?php endforeach; ?>
    </body>
</html>