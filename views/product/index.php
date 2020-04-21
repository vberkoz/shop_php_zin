<?php include_once ROOT . '/views/layouts/header.php'?>

<div style="margin-top: 16px">
    <b style="margin-left: 10px;"><?php echo $currentCategoryName; ?></b>
    <div>
        <?php foreach ($products as $product): ?>
            <div style="padding: 20px 10px; width: 200px; display: inline-block;">
                <?php if ($product['is_new']): ?>
                    <span style="position: absolute; padding: 5px; color: red;">New</span>
                <?php endif; ?>

                <a href="/product/<?php echo $product['id']; ?>">
                    <img src="/template/images/<?php echo $product['image']; ?>"
                         alt="<?php echo $product['title']; ?>"
                         style="max-width: 200px; max-height: 300px;">
                    <p style="height: 36px"><?php echo $product['title']; ?></p>
                </a>

                <h3>£<?php echo $product['price']; ?></h3>

                <a href="#">Add to bag</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>