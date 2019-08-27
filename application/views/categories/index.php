<h2><?= $title; ?></h2>

<ul class="list-group">
    <?php foreach($categories as $category): ?>
        <a href="<?= site_url('/categories/posts/'.$category['id']) ?>" class="list-group-item list-group-item-action"><?= $category['name']; ?></a>
    <?php endforeach; ?>
</ul>