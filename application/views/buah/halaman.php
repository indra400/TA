	
<!DOCTYPE html>
<!-- saved from url=(0029)http://bootswatch.com/amelia/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
	<title>.:: SIMANPEN </title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.css" />
  
    <script src="<?php echo base_url(); ?>aset/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>aset/js/bootswatch.js"></script>
	<script src="<?php echo base_url(); ?>aset/js/jquery/jquery-ui.js"></script>
	<script type="text/javascript">
	// <![CDATA[
	
	//$(document).ready(function () {
	//	$(function () {
	//		$( "#kode_surat" ).autocomplete({
	//			source: function(request, response) {
	//				$.ajax({ 
	//					url: "<?php echo site_url('index.php/admin/get_klasifikasi'); ?>",
	//					data: { kode: $("#kode_surat").val()},
	//					dataType: "json",
	//					type: "POST",
	//					success: function(data){
	//						response(data);
	//					}    
	//				});
	//			},
	//		});
	//	});
	//	
	//	$(function () {
	//		$( "#dari" ).autocomplete({
	//			source: function(request, response) {
	//				$.ajax({ 
	//					url: "<?php echo site_url('index.php/admin/get_instansi_lain'); ?>",
	//					data: { kode: $("#dari").val()},
	//					dataType: "json",
	//					type: "POST",
	//					success: function(data){
	//						response(data);
	//					}    
	//				});
	//			},
	//		});
	//	});
	//	
	//	
	//	$(function() {
	//		$( "#tgl_surat" ).datepicker({
	//			changeMonth: true,
	//			changeYear: true,
	//			dateFormat: 'yy-mm-dd'
	//		});
	//	});
	//});
	// ]]>
	</script>
	</head>
	
  <body style="">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <span class="navbar-brand"><strong style="font-family: verdana;">SIMANPEN</strong></span>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">	
			<li><a href="<?php echo base_url(); ?>index.php/admin"><i class="icon-home icon-white"> </i> Beranda</a></li>
				<!--<a href="<?php //echo base_url(); ?>index.php/admin"><i class="icon-home icon-white"> </i> Beranda</a></li>-->
            <li class="dropdown">
				<a href="<?php echo base_url(); ?>index.php/admin/idbuah" id="themes"><i class="icon-th-list icon-white"> </i> Buah </a>
				
				
            </li>
			
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-random icon-white"> </i> Stok <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/stok_gudang">Stok Gudang</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/surat_keluar">Stok Pasar</a></li>
			  </ul>
            </li>
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-file icon-white"> </i> Transaksi <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/agenda_surat_masuk"> Gudang</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/agenda_surat_keluar"> Pasar</a></li>
				<li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/agenda_surat_keluar"> Suplier</a></li>
			  </ul>
            </li>
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-briefcase icon-white"> </i> Pengguna<span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" onclick="alert('see you next time.. :)')" href="<?php echo base_url(); ?>#"> Pelanggan</a></li>
                <li><a tabindex="-1" onclick="alert('see you next time.. :)')" href="<?php echo base_url(); ?>#"> Pegawai</a></li>
				<li><a tabindex="-1" onclick="alert('see you next time.. :)')" href="<?php echo base_url(); ?>#"> Suplier</a></li>
			  </ul>
            </li>
			<?php
			//if ($this->session->userdata('admin_level') == "Super Admin") {
			?>
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-wrench icon-white"> </i> Pengaturan <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/pengguna">Perusahaan</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/manage_admin">Manajemen Admin</a></li>
              </ul>
            </li>
			<?php 
			//}
			?>
          </ul>

          <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-user icon-white"></i> Administrator <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/passwod">Rubah Password</a></li>
                <li><a tabindex="-1" href="<?php echo base_url(); ?>index.php/admin/logout">Logout</a></li>
                <li><a tabindex="-1" href="" target="_blank">Help</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>

	<?php 
	$q_perusahaan	= $this->db->query("SELECT * FROM t_perusahaan LIMIT 1")->row();
	//echo $this->session->userdata('admin_level');
	?>
    <div class="container">

      <div class="page-header" id="banner">
        <div class="row">
          <div class="" style="padding: 15px 15px 0 15px;">
			<div class="well well-sm">
				<img src="<?php echo base_url(); ?>upload/<?php echo $q_perusahaan->logo; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 100px; height: 100px">
                <h2 style="margin: 15px 0 10px 0; color: #000;"><?php echo $q_perusahaan->nama_perusahaan; ?></h2>
                <div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix"><b>Alamat : <?php echo $q_perusahaan->alamat; ?></b></div>
             </div>
          </div>
        </div>
      </div>
<!-- letak page -->
		<?php $this->load->view('buah/'.$page); ?>
<!---->	  
	  <div class="span12 well well-sm">
		<h4 style="font-weight: bold">SIMANPEN </h4>
		<h6>&copy;  Skripsi Indrasworo widodo. Waktu Eksekusi : {elapsed_time}, Penggunaan Memori : {memory_usage}</h6>
	  </div>
 
    </div>

  
</body></html>
