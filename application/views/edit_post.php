<div class="col-sm-9">
  <h3>Add a new post</h3>
  <?php $row = $post->row(); ?>
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/post_manage/post_edit/<?php echo $row->id; ?>" enctype="multipart/form-data">
  
  <div class="form-group">
    <label class="control-label col-sm-2">Post Title:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Tags:</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="tags" value="<?php echo $row->tags; ?>" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Post body:</label>
    <div class="col-sm-8"> 
      <textarea class="form-control" name="body" id="ckeditor" required><?php echo $row->body; ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Image:</label>
    <div class="col-sm-8"> 
      <input type="file" name="post_image">
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Status:</label>
  <div class="col-sm-8">
  <select class="form-control" name="status" required>
    <option hidden="" value="">select one</option>
    <option>Published</option>
    <option>Pending</option>
    <option>Draft</option>
  </select>
  </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Category:</label>
  <div class="col-sm-8">
  <select class="form-control" name="category" required>
    <option value="" hidden>select category</option>
    <?php foreach($cat->result() as $row): ?>
    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
  <?php endforeach; ?>
  </select>
</div>
</div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="Submit" class="btn btn-default">submit</button>
    </div>
  </div>
</form>
</div>