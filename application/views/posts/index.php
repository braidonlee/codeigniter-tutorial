<h2><?= $title ?></h2>
<?php foreach($posts as $post): ?>
    <div class="mb-3">
        <h3><?= $post['title']; ?></h3>
        <div class="row">
            <div class="col-md-3">
                <img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ? $post['post_image'] : 'noimage.jpg'; ?>" class="img-fluid img-thumbnail">
            </div>

            <div class="col-md-9">
                <small>Posted on: <?= $post['created_at']; ?> in <?= $post['name']; ?> </small><br>
                <div><?= word_limiter($post['body'], 36); ?></div>
                <a class="btn btn-primary btn-sm" href="<?= site_url('posts/'.$post['slug']); ?>">Read more</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<div class="pagination-links">
    <?= $this->pagination->create_links(); ?>
</div>