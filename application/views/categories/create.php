<h2><?= $title; ?></h2>

<?= validation_errors(); ?>

<?= form_open('categories/create'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Add name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>