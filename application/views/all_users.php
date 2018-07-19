<div class="col-sm-12">
  <h1>All users </h1>
  <?php if($this->session->flashdata('message')){

  ?>
  <h4 class="bg-success"><?php echo $this->session->flashdata('message'); ?></h4>
  <?php
  } ?>           
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Status</th>
        <th>Password</th>
        <th>Photo</th>
        <th style="width: 90px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if($post->num_rows() > 0) : ?>
      <?php foreach($post->result() as $row) : ?>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->username; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->status; ?></td>
        <td><?php echo $row->password; ?></td>
        <td><img src="<?php echo $row->user_image; ?>" height="100"></td>
        <td>
          <div class="btn-group">
            <a href="<?php echo base_url(); ?>admin/user_manage/edit_user/<?php echo $row->id; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="<?php echo base_url(); ?>admin/user_manage/delete_user/<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif ?>
    </tbody>
  </table>

  <a href="<?php echo base_url(); ?>admin/user_manage/create_user" class="btn btn-info">New user</a>
</div>