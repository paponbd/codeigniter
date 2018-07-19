<div class="col-sm-12">
  <h1>All categories </h1>
  <?php if($this->session->flashdata('message')){

  ?>
  <h4 class="bg-success"><?php echo $this->session->flashdata('message'); ?></h4>
  <?php
  } ?>           
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Status</th>
        <th>Short Description</th>
        <th>Long Description</th>
        <th style="width: 90px;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php if($post->num_rows() > 0) : ?>
      <?php foreach($post->result() as $row) : ?>
      <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->status; ?></td>
        <td><?php echo $row->shortdesc; ?></td>
        <td><?php echo $row->longdesc; ?></td>
        <td>
          <div class="btn-group">
            <a href="<?php echo base_url(); ?>admin/category_manage/edit_category/<?php echo $row->id; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
            <a href="<?php echo base_url(); ?>admin/category_manage/delete_category/<?php echo $row->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
        </td>
      </tr>
      <?php endforeach; ?>
      <?php endif ?>
    </tbody>
  </table>

  <a href="<?php echo base_url(); ?>admin/category_manage/create_category" class="btn btn-info">New user</a>
</div>