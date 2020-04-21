<html>
<head>
    <title>Shop PHP Zin</title>
</head>
<body>
<h1 style="padding: 40px 40px 0 40px;">Shop PHP Zin</h1>

<ul style="display: flex; list-style-type: none;">
    <li style="padding-right: 10px;"><a href="/">Home</a></li>
    <li style="padding-right: 10px;"><a href="/products">Shop</a></li>
    <li style="padding-right: 10px;"><a href="/blog">Blog</a></li>
    <li style="padding-right: 10px;"><a href="/about">About Us</a></li>
    <li style="padding-right: 10px;"><a href="/contacts">Contacts</a></li>
</ul>

<div style="display: flex; padding-right: 40px;">
    <div style="min-width: 300px">
        <ul style="list-style-type: none;">
            <li style="margin-bottom: 16px"><b>Catalog</b></li>
            <?php foreach ($categories as $category): ?>
            <li style="padding: 3px;">
                <a href="/category/<?php echo $category['id']; ?>" style="padding: 3px;
                    <?php if (isset($categoryId)): ?>
                        <?php if ($categoryId == $category['id']): ?>
                            <?php $currentCategoryName = $category['name']; ?>
                            background-color: blue; color: white; font-weight: bold;
                        <?php endif; ?>
                    <?php endif; ?>
                ">
                    <?php echo $category['name']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>