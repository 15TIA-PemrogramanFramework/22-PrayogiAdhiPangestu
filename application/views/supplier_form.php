<?php $this->load->view('templates/header_home'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Supplier</label>
		<input type="text" placeholder="Masukkan nama supplier" value="<?php echo $nama_supplier; ?>" class="form-control" name="nama_supplier">
	</div>	
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" placeholder="Masukkan alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>Kota</label>
		<input type="text" placeholder="Masukkan kota" value="<?php echo $kota; ?>" class="form-control" name="kota">
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input type="text" placeholder="Masukkan telepon" value="<?php echo $telepon; ?>" class="form-control" name="telepon">
	</div>
	<input type="hidden" name="id" value="<?php echo $id_supplier; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('supplier') ?>" class="btn btn-primary">Cancel</a>	
</form>
<?php $this->load->view('templates/footer_home'); ?>