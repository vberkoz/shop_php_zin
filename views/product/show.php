<?php include_once ROOT . '/views/layouts/header.php'?>

<div style="margin-top: 16px">
    <div style="display: flex; margin-left: 50px;">
        <img src="../../template/images/<?php echo $product['image']; ?>"
             alt="<?php echo $product['title']; ?>"
             style="max-width: 300px; max-height: 450px;">

        <div style="margin-left: 50px;">
            <h2 style="margin: 0;"><?php echo $product['title']; ?></h2>

            <h3>£<?php echo $product['price']; ?></h3>

            <a href="#">Add to bag</a>
        </div>
    </div>

    <div style="margin: 50px 0 0 50px;">
        <b>Product information</b>

        <p><?php echo $product['description']; ?></p>
    </div>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>