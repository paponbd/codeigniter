<div class="col-sm-12">
  <h1>All posts </h1>
  <?php if($this->session->flashdata('message')){

  ?>
  <h4 class="bg-success"><?php echo $this->session->flashdata('message'); ?></h4>
  <?php
  } ?>           
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Body</th>
        <th>Published</th>
        <th>Tags</th>
        <th>Status</th>
        <th>Category</th>
        <th>Username</th>
        <th>Post image</th>
        <th style="width: 90px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if($post->num_rows() > 0) : ?>
      <?php foreach($post->result() as $row) : ?>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->title; ?></td>
        <td><?php echo word_limiter($row->body, 10); ?></td>
        <td><?php echo $row->pubdate; ?></td>
        <td><?php echo $row->tags; ?></td>
        <td><?php echo $row->status; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->username; ?></td>
        <td><img src="<?php echo $row->post_image; ?>" height="100"></td>
        <td>
          <div class="btn-group">
            <a href="<?php echo base_url(); ?>admin/post_manage/post_edit/<?php echo $row->id; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="<?php echo base_url(); ?>admin/post_manage/post_delete/<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif ?>
    </tbody>
  </table>

  <a href="<?php echo base_url(); ?>admin/post_manage/create_post" class="btn btn-info">New post</a>
</div>