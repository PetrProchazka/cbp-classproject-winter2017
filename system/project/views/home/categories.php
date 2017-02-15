<div class="categories-list">
    <h2>Categories</h2>
    <p>In our eshop we have:</p>
    <ul>
        <?php foreach($categories as $category) : ?>
            <li>
                <a href="<?php echo $category->getUrl(); ?>">
                    <?php echo $category->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>