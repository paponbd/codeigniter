<div class="col-sm-6">		
		<?php if($post->num_rows() > 0) : ?>
		<?php foreach($post->result() as $row) : ?>
			<!-- Articles -->
			<div class="row">
				<article class="col-xs-12">
					<div class="media">
						<div class="media-left">
							<a href="<?php echo base_url(); ?>blog/single/<?php echo $row->id ?>">
							</a>
						</div>
						<div class="media-body">
							<h2 class="media-heading"><a href="<?php echo base_url(); ?>blog/single/<?php echo $row->id ?>"><?php echo $row->title; ?></a></h2>
							<h5><b>published on <?php echo $row->pubdate; ?></b></h5>
							<p><img class="media-object" src="<?php echo $row->post_image; ?>" alt="" height="100"><?php echo word_limiter($row->body, 50); ?></p>
						
						<ul class="list-inline">
							<li><a href="blog/get_single_post/<?php echo $row->id ?>"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
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