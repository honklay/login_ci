<!DOCTYPE html>
<html>
  <head>
    <title>Masuk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    
 	<link href="<?php echo base_url()?>assets/bootstrap4/css/bootstrap.min.css" rel="stylesheet">    
	<link href="<?php echo base_url()?>assets/fontawesome5/css/all.css" rel="stylesheet">    
 
  </head>
  <body>
 
    <div class="container">
      <?php $this->load->view('Menu');?> <!--Include menu-->
      <div class="container">
        <div class="row">
          <h2>Welcome back <?php echo $this->session->userdata('ses_nama');?></h2>
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