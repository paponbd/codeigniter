<div class="col-sm-9">		
		<?php if($post->num_rows() > 0) : ?>
		<?php foreach($post->result() as $row) : ?>
			<!-- Articles -->
			<div class="row">
				<article class="col-xs-12">
					<div class="media">
						<div class="media-body">
							<h2 class="media-heading"><a href="#"><?php echo $row->title; ?></a></h2>
							<h5><b>published on <?php echo $row->pubdate; ?> by <?php echo $row->username; ?></b></h5>
							<img src="<?php echo $row->post_image; ?>" width="600">
							<p><?php echo $row->body; ?></p>
						
						<ul class="list-inline">
							<h2>All Comments</h2>
							
							<li><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
						</ul>
						</div>
					</div>
				</article>
			</div>
			<hr>
		<?php endforeach ?>
		<?php endif ?>
</div>