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