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
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Logo</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Engage</a></li>
							<li><a href="#">Pontificate</a></li>
							<li><a href="#">Synergize</a></li>
						</ul>
					</li>    
                </ul>
				<!-- Log In Form -->
				<form class="navbar-form navbar-right form-inline" novalidate method="post" action="<?php echo base_url(); ?>blog/verify">
					<div class="form-group">
						<label class="sr-only" for="emailAddress">Email address</label>
						<input type="email" name="user" class="form-control" id="emailAddress" placeholder="Email">
					</div>
					<div class="form-group">
						<label class="sr-only" for="pwd">Password</label>
						<input type="password" name="pswd" class="form-control" id="pwd" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-default">Sign in</button>
				</form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <br>