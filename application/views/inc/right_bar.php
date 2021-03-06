<div class="col-sm-3">
 
			<!-- Search -->
			<form class="form-inline search" role="search">
				<div class="form-group">
					<input type="text" class="form-control">
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
			</form>

			<!--Category panel-->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-th-list"></span> Categories</h1>
				</div>
				<div class="list-group">
					<?php if($cat->num_rows() > 0) : ?>
					<?php foreach($cat->result() as $row) : ?>
					<a href="<?php echo base_url(); ?>blog/same/<?php echo $row->id; ?>" class="list-group-item"><?php echo $row->name; ?></a>
					<?php endforeach ?>
					<?php endif ?>
				</div>
			</div>
 
			<!-- Progress Bars -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-scale"></span> 
						Dramatically Engage
					</h3>
				</div>
				<div class="panel-body">
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
						aria-valuemin="0" aria-valuemax="100" style="width:100%">
							100% Proactively Envisioned
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
						aria-valuemin="0" aria-valuemax="100" style="width:80%">
							80% Objectively Innovated
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
						aria-valuemin="0" aria-valuemax="100" style="width:45%">
							45% Portalled
						</div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
						aria-valuemin="0" aria-valuemax="100" style="width:35%">
							35% Done
						</div>
					</div>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-bullhorn"></span> 
						Active Predomination
					</h3>
				</div>
				<div class="panel-body">
					<p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default">Resource</button>
						<button type="button" class="btn btn-default">Envision</button>
						<button type="button" class="btn btn-default">Niche</button>
					</div>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Dramatically Engage</h1>
				</div>

				<div class="panel-body">
					<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
					<p><button class="btn btn-default">Engage</button></p>
				</div>
			</div>


	  </div>