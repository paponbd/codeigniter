<div class="col-sm-12">
  <h1 align="center">Add a new user</h1>
  <?php $row = $post->row(); ?>
  <?php if($this->session->flashdata('message')){

  ?>
  <h4 class="bg-success" align="center"><?php echo $this->session->flashdata('message'); ?></h4>
  <?php
  } ?>
<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>admin/user_manage/edit_user/<?php echo $row->id; ?>" enctype="multipart/form-data">
  <div class="form-group">
    <label class="control-label col-sm-2">User Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" required value="<?php echo $row->username; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">email:</label>
    <div class="col-sm-8"> 
      <input type="text" class="form-control" name="email" required value="<?php echo $row->email; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">password:</label>
    <div class="col-sm-8"> 
      <input type="password" class="form-control" name="password" required value="<?php echo $row->password; ?>">
    </div>
  </div>
  <div class="form-group">
  <label class="control-label col-sm-2">Status:</label>
  <div class="col-sm-8">
  <select class="form-control" name="status" required>
    <option hidden="" value="">select one</option>
    <option>active</option>
    <option>inactive</option>
  </select>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Image:</label>
    <div class="col-sm-8"> 
      <input type="file" name="post_image">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="Submit" class="btn btn-default">submit</button>
    </div>
  </div>
</form>
</div>