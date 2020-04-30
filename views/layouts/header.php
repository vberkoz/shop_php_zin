<html>
<head>
    <title>Shop PHP Zin</title>
    <link rel="stylesheet" href="/template/css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Shop PHP Zin</h1>

            <div style="display: flex; justify-content: space-between;">
                <ul class="menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/category/1">Shop</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>

                <ul class="menu">
                    <li><a href="/bag">View Bag (<span id="bag-count"><?php echo Bag::countItems(); ?></span>)</a></li>
                    <?php if (User::isGuest()): ?>
                        <li><a href="/signin">Sign In</a></li>
                        <li><a href="/signup">Sign Up</a></li>
                    <?php else: ?>
                        <li><a href="/cabinet">Cabinet</a></li>
                        <li><a href="/signout">Sign Out</a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <div style="display: flex; margin-top: 20px;">