<div class="categories-list">
    <h2>Categories</h2>
    <p>In our eshop we have:</p>
    <ul>
        <?php foreach($categories as $category) : ?>
            <li>
                <?php echo $category->name; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>