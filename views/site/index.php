<?php include_once ROOT . '/views/layouts/header.php'?>
<?php include_once ROOT . '/views/layouts/catalog.php'?>

<div>
    <div class="slideshow-container">
        <div style="right: 0; text-align: right; margin-bottom: 20px;">
            <span class="prev" onclick="plusSlides(-1)">&#10094;</span>

            <span class="next" onclick="plusSlides(1)">&#10095;</span>
        </div>

        <div id="featured_items">
            <?php foreach ($featuredItems as $key => $item): ?>
                <div class="product-card fade">
                    <?php if ($item['is_new']): ?><span>New</span><?php endif; ?>

                    <a href="/product/<?php echo $item['id']; ?>/<?php echo $item['category_id']; ?>">
                        <img src="template/images/<?php echo $item['image']; ?>"
                             alt="<?php echo $item['title']; ?>">
                        <p><?php echo $item['title']; ?></p>
                    </a>

                    <h3>£<?php echo $item['price']; ?></h3>

                    <a href="#" class="add-to-bag" data-id="<?php echo $item['id']; ?>">Add to bag</a>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="slider"></div>
    </div>
</div>

<?php include_once ROOT . '/views/layouts/footer.php'?>