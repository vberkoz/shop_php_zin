<html>
<head>
    <title>Shop PHP Zin</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {overflow-y:scroll;}

        h1, h2, h3 {
            font-family: "Times New Roman", serif;
            font-weight: bold;
            color: #434343;
        }

        h1 {margin: 0;}

        a, a:visited, a:active, p, span, input, textarea, table {
            font-family: Verdana, sans-serif;
            font-weight: lighter;
            font-size: 13px;
            color: #434343;
            text-decoration: none;
        }

        table {
            width:100%;
            overflow-wrap: break-word;
        }

        tr {height: 32px;}

        th, td {padding: 5px 20px;}

        form input {
            padding: 5px;
            margin: 5px 0;
        }

        input[type=submit] {
            padding: 5px 20px;
        }

        textarea {
            width: 300px;
            height: 200px;
            padding: 5px;
        }

        .category-item a {
            display: block;
            padding: 5px 0;
        }

        a:hover {text-decoration: underline;}

        a.active {font-weight: bold;}

        .pagination {padding: 5px 0;}

        .pagination a {padding: 5px 10px;}

        .current-page {
            background-color: #a5a5a5;
            color: white;
            font-weight: bold;
        }

        .pagination a:hover {
            text-decoration: none;
            background-color: #a5a5a5;
            color: white;
        }

        p {
            font-size: 13px;
            line-height: 1.6em;
        }

        ul {padding: 0;}

        .wrapper {
            min-height: 100%;
            margin-bottom: -100px;
        }

        .container {
            max-width: 1190px;
            margin: auto;
            padding: 40px 0;
        }
        
        .menu {
            display: flex;
            list-style-type: none;
        }
        
        .menu li {padding-right: 20px;}

        .product-card {
            display: inline-block;
            padding: 0 16px 40px;
            width: 212px;
        }

        .product-card span {
            position: absolute;
            font-weight: bold;
            padding: 3px 5px;
            color: red;
        }

        .product-card a img {
            max-height: 310px;
            max-width: 230px;
        }

        .product-card a p {height: 36px;}
    </style>
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