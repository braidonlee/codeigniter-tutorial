<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?= $post['id']; ?>">

    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add title" value="<?= $post['title']; ?>">
    </div>

    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" placeholder="Add body"><?= $post['body']; ?></textarea>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id">
            <?php foreach($categories as $category) : ?>
                <option value="<?= $category['id']; ?>" 
                    <?php if ($post['category_id'] == $category['id']){echo 'selected';}?>
                ><?= $category['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body');
</script>