


<nav class="navbar navbar-expand-sm bg-light navbar-light">
<div class="container">
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="navbar-nav">
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()?>page">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/data_mahasiswa">Data Mahasiswa</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/input_nilai">Input Nilai</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/krs">KRS</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/lhs">LHS</a></li>
  <!--Akses Menu Untuk Dosen-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()?>page">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/data_mahasiswa">Data Mahasiswa</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/input_nilai">Input Nilai</a></li>
  <!--Akses Menu Untuk Mahasiswa-->
  <?php else:?>
      <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()?>page">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/krs">KRS</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>page/lhs">LHS</a></li>
  <?php endif;?>
  </ul>
 
  <ul class="navbar-nav pull-right">
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>Login/logout">Sign Out</a></li>
  </ul>
 
     
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 