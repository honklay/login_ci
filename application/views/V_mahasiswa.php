<!DOCTYPE html>
<html>
  <head>
    <title>Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
 	<link href="<?php echo base_url()?>assets/bootstrap4/css/bootstrap.min.css" rel="stylesheet">    
	<link href="<?php echo base_url()?>assets/fontawesome5/css/all.css" rel="stylesheet">    
 
 
  </head>
  <body>
 
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <h2>Data Mahasiswa</h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1210158</td>
                <td>M Fikri</td>
                <td>Sistem Informasi</td>
              </tr>
              <tr>
                <td>1210157</td>
                <td>Joko</td>
                <td>Sistem Komputer</td>
              </tr>
               
            </tbody>
          </table>
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