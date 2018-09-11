<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Simple Template with CodeIgniter &amp; Bootstrap</title>
	
	<link href="<?php echo base_url()?>assets/bootstrap4/css/bootstrap.min.css" rel="stylesheet">    
	<link href="<?php echo base_url()?>assets/fontawesome5/css/all.css" rel="stylesheet">    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
		<div class="container">
					  
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="navbar-toggler-icon"></span>			
          </button>
          <a class="navbar-brand" href="#">MyComp.INC</a>		  
        
		
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()?>"><i class="fas fa-home"></i> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Otentifikasi/why"><i class="fas fa-home"></i> Why</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Otentifikasi/services"><i class="fas fa-home"></i> Services</a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-home"></i> Info </a>
              <div class="dropdown-menu">
              	<a class="dropdown-item" href="<?php echo base_url()?>Otentifikasi/about"><i class="fas fa-home"></i> About</a>
                <a class="dropdown-item" href="<?php echo base_url()?>Otentifikasi/contact"><i class="fas fa-home"></i> Contact</a>
              </div>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
     </div>
    </nav>

    <!-- Begin page content -->
<div class="container">