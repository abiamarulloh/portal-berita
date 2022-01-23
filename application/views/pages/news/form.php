<div class="container-fluid">
    <h3><?= !$new_by_id ?  'Add' : 'Edit' ?>  News</h3>

    <?php echo form_open_multipart('');?>
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="<?= $new_by_id ? $new_by_id->title : '' ?>">
          <?php echo form_error('title', '<div class="text-danger">', '</div>'); ?>
        </div>

        <img src="<?= base_url() ?>assets/image_uploaded/<?= $new_by_id ? $new_by_id->image : '' ?>" width="50px" class="<?= !$new_by_id ? "d-none" : '' ?>" height="50px" alt="">
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image" id="image" <?= !$new_by_id ? 'required'  : '' ?> value="<?= $new_by_id ? $new_by_id->image : '' ?>">
          <?php echo form_error('image', '<div class="text-danger">', '</div>'); ?>
        </div>
        <div class="form-group">
            <label for="editor">Description</label>
            <textarea id="editor" class="form-control" name="description" value="<?= $new_by_id ? $new_by_id->description : '' ?>"><?= $new_by_id ? $new_by_id->description : '' ?>
            </textarea>
          <?php echo form_error('description', '<div class="text-danger">', '</div>'); ?>
        </div>

        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" name="tags" id="tags"  value="<?= $new_by_id ? $new_by_id->tags : '' ?>">
          <?php echo form_error('tags', '<div class="text-danger">', '</div>'); ?>

        </div>

        <div class="form-group">
          <label for="author">Author</label>
          <input type="text" class="form-control" name="author" id="author" value="<?= $new_by_id ? $new_by_id->author : '' ?>">
          <?php echo form_error('author', '<div class="text-danger">', '</div>'); ?>
        </div>

        <button type="submit" class="btn btn-primary float-right">Submit</button>
        <button type="reset" class="btn btn-danger mr-3 float-right">Reset</button>
    </form>
</div>