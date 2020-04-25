<?php include_once ROOT . '/views/layouts/header.php'?>
<?php include_once ROOT . '/views/layouts/catalog.php'?>

<div>
    <div>
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <?php if ($product['is_new']): ?><span>New</span><?php endif; ?>

                <a href="/product/<?php echo $product['id']; ?>/<?php echo $product['category_id']; ?>">
                    <img src="template/images/<?php echo $product['image']; ?>"
                         alt="<?php echo $product['title']; ?>">
                    <p><?php echo $product['title']; ?></p>
                </a>

                <h3>£<?php echo $product['price']; ?></h3>

<!--                <a href="/bag/add/--><?php //echo $product['id']; ?><!--" class="add-to-bag">Add to bag</a>-->
                <a href="#" class="add-to-bag" data-id="<?php echo $product['id']; ?>">Add to bag</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>