<!--
<html>
<head>
	<title>ABC Group - Jenis Buah</title>
</head>
<body>
	<h1>Jenis Buah</h1>
	<table border="1">
		<tr>
			<th>kode buah</th>
			<th>nama buah</th>
			<th>satuan</th>
			<th>edit</th>
		</tr>
		<?php //foreach($data as $ib){ ?>
		<tr>
			<td><?php //echo $ib->id_buah ?></td>
			<td><?php //echo $ib->nama_buah ?></td>
			<td><?php //echo $ib->satuan ?></td>
			<td><a href="<?php //echo base_url(); ?>index.php/admin/idbuah/update/<?php //echo $ib->id_buah ?>">edit</a></td>
			<td><a href="<?php //echo base_url(); ?>index.php/admin/idbuah/del/<?php //echo $ib->id_buah ?>">del</a></td>
			</tr>
		<?php //} ?>
		<tr>
			<td><a href="<?php //echo //base_url(); ?>index.php/admin/idbuah/add">tambah</a></td>
		</tr>
	</table>
	<?php //echo $page ; ?>
</body>
</html>
-->


<div class="clearfix">
<div class="row">
  <div class="col-lg-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Buah</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/admin/idbuah/add" class="btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				<form class="navbar-form navbar-left" method="post" action="<?=base_URL()?>index.php/admin/surat_masuk/cari">
					<input type="text" class="form-control" name="q" style="width: 200px" placeholder="Kata kunci pencarian ..." required>
					<button type="submit" class="btn btn-danger"><i class="icon-search icon-white"> </i> Cari</button>
				</form>
			</ul>
		</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->

  </div>
</div>

<?php //echo $this->session->flashdata("k");?>
	


<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th width="10%">Id Buah</th>
			<th width="27%">Nama Buah</th>
			<th width="25%">Satuan</th>
			<th width="38%">Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php 
		//if (empty($data)) {
		//	echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
		//} else {
		//	$no 	= ($this->uri->segment(4) + 1);
			foreach ($data as $ib) {
		?>
		<tr>
			<td><?php echo $ib->id_buah?></td>
			<td><?php echo $ib->nama_buah?></td>
			<td><?php echo $ib->satuan?></td>
			
			
			<td class="ctr">
				<?php  
				//if ($b->pengolah == $this->session->userdata('admin_id') or $this->session->userdata('admin_id') == '1') {
				?>
				<div class="btn-group">
					<a href="<?=base_URL()?>index.php/admin/idbuah/update/<?php echo $ib->id_buah ?>" class="btn btn-success btn-sm" title="Edit Data"><i class="icon-edit icon-white"> </i> Edt</a>
					<a href="<?=base_URL()?>index.php/admin/idbuah/del/<?php echo $ib->id_buah ?>" class="btn btn-warning btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="icon-trash icon-remove">  </i> Del</a>			
					<a href="<?=base_URL()?>index.php/admin/surat_disposisi/<?=$ib->id_buah?>" class="btn btn-default btn-sm"  title="Disposisi Surat"><i class="icon-trash icon-list"> </i> Disp</a>
					<a href="<?=base_URL()?>index.php/admin/disposisi_cetak/<?=$ib->id_buah?>" class="btn btn-info btn-sm" target="_blank" title="Cetak Disposisi"><i class="icon-print icon-white"> </i> Ctk</a>
				</div>	
				<?php 
				//} else {
				?>
				<div class="btn-group">
					<a href="<?=base_URL()?>index.php/admin/disposisi_cetak/<?=$ib->id_buah?>" class="btn btn-info btn-sm" target="_blank" title="Cetak Disposisi"><i class="icon-print icon-white"> </i> Ctk</a>
				</div>	
				<?php 
				}
				?>
				
			</td>
		</tr>
		<?php 
		//	$no++;
		//	}
		//}
		?>
	</tbody>
</table>
<center><ul class="pagination"><?php echo $pagi; ?></ul></center>
</div>