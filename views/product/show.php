<?php include_once ROOT . '/views/layouts/header.php'?>
<?php include_once ROOT . '/views/layouts/catalog.php'?>

<div>
    <div style="display: flex;">

        <a href="/template/images/<?php echo $product['image']; ?>">
            <div style="max-width: 300px; max-height: 450px; min-width: 300px; min-height: 450px;">
                <img src="/template/images/<?php echo $product['image']; ?>"
                     alt="<?php echo $product['title']; ?>"
                     style="max-width: 300px; max-height: 450px; min-width: 300px; min-height: 450px;">
            </div>
        </a>

        <div style="margin-left: 30px;">
            <h2 style="margin: 0;"><?php echo $product['title']; ?></h2>

            <h3>£<?php echo $product['price']; ?></h3>

            <a href="#">Add to bag</a>

            <div style="margin-top: 30px;">
                <h3>Product information</h3>

                <p><?php echo $product['description']; ?></p>
            </div>
        </div>

    </div>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>