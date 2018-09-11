
<!DOCTYPE html>
<html>
  <head>
    <title>KRS</title>
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
          <h2>Kartu Rencana Studi</h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Sks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MK0001</td>
                <td>Bahasa Pemrograman I</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MK0002</td>
                <td>Web I</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MK0003</td>
                <td>Algoritma II</td>
                <td>2</td>
              </tr>
              <tr>
                <td>MK0004</td>
                <td>Bahasa Inggris I</td>
                <td>2</td>
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