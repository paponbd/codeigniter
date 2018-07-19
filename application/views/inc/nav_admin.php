<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Admin Panel</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="<?php echo base_url(); ?>admin/post_manage">View all posts</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/post_manage/create_post">Add new post</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="<?php echo base_url(); ?>admin/category_manage">View all categories</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/category_manage/create_category">Add new category</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="<?php echo base_url() ?>admin/user_manage">View all users</a></li>
							<li><a href="<?php echo base_url() ?>admin/user_manage/create_user">Add new user</a></li>
						</ul>
					</li>   
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <img src="<?php echo $_SESSION['image']; ?>" height="50">
                    </li>
                    <li>
                        <a href="">Logged in as <?php echo $_SESSION['user']; ?></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/dashboard/logout" class="btn btn-default btn-small">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                        </a>
                    </li>
                </ul> 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>