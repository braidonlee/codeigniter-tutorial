<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open_multipart('posts/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add title">
    </div>

    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" placeholder="Add body"></textarea>
    </div>

    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="category_id">
            <?php foreach($categories as $category) : ?>
                <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" name="userfile" size="20">
        <label class="custom-file-label">Upload image...</label>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="//cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body');
</script>