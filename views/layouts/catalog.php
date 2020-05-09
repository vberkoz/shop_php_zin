<div style="min-width: 200px">
    <ul style="list-style-type: none; margin: 0;">
        <?php foreach ($categories as $category): ?>
            <li class="category-item">
                <a href="/category/<?php echo $category['id']; ?>"
                    <?php if (isset($categoryId)): ?>
                        <?php if ($categoryId == $category['id']): ?>
                            <?php $currentCategoryName = $category['title']; ?>
                            class="active"
                        <?php endif; ?>
                    <?php endif; ?>
                    >
                    <?php echo $category['title']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>