<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    
	<link href="<?php echo base_url()?>assets/bootstrap4/css/bootstrap.min.css" rel="stylesheet">    
	<link href="<?php echo base_url()?>assets/fontawesome5/css/all.css" rel="stylesheet">    
  </head>
  <body>
 
    <div class="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4" style="width:50%; padding: 80px 15px 20px 15px ; text-align: left; margin: auto;">
          <form class="form-signin" action="<?php echo base_url().'login/auth'?>" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
		</div>
        </div> <!-- /container -->
 
 
    <!-- jQuery-->
	<script src="<?php echo base_url()?>assets/bootstrap4/js/popper.min.js"></script>
	<script src="<?php echo base_url()?>assets/bootstrap4/js/jquery-3.3.1.min.js"></script>
	    
    <!-- Bootsrap -->
    <script src="<?php echo base_url()?>assets/bootstrap4/js/bootstrap.min.js"></script>
	
 
  </body>
</html>