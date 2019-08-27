<h2><?= $title; ?></h2>

<small>Posted on: <?= $post['created_at']; ?></small><br>

<img src="<?= site_url(); ?>assets/images/posts/<?= $post['post_image'] ? $post['post_image'] : 'noimage.jpg'; ?>" class="img-fluid">

<div><?= $post['body']; ?></div>

<?php if ($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<a href="<?= base_url(); ?>posts/edit/<?= $post['slug'] ?>" class="btn btn-secondary btn-sm float-left mr-2">Edit</a>
<?= form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger btn-sm">
</form>
<?php endif; ?>

<hr>

<h3>Comments</h3>

<?php if ($comments): ?>
    <?php foreach($comments as $comment): ?>
        <h5><?= $comment['body']; ?> [by <?= $comment['name']; ?>]</h5>
    <?php endforeach; ?>
<?php else: ?>
    <p>No comments to display.</p>
<?php endif; ?>

<hr>

<h3>Add comment</h3>

<?= validation_errors() ?>

<?= form_open('comments/create/'.$post['id']); ?>
    <input type="hidden" name="slug" value="<?= $post['slug']; ?>">

    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Add name">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Add email">
    </div>

    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" placeholder="Add body"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>