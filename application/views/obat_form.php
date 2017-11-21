<?php $this->load->view('templates/header_home'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama Obat</label>
		<input type="text" placeholder="Masukkan nama obat" value="<?php echo $nama_obat; ?>" class="form-control" name="nama_obat">
	</div>	
	<div class="form-group">
		<label>Kategori</label>
		<input type="text" placeholder="Masukkan kategori" value="<?php echo $kategori; ?>" class="form-control" name="kategori">
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="text" placeholder="Masukkan Stok" value="<?php echo $stok; ?>" class="form-control" name="stok">
	</div>
	<div class="form-group">
		<label>Satuan</label>
		<input type="text" placeholder="Masukkan satuan" value="<?php echo $satuan; ?>" class="form-control" name="satuan">
	</div>
	<input type="hidden" name="id" value="<?php echo $id_obat; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('obat') ?>" class="btn btn-primary">Cancel</a>	
</form>
<?php $this->load->view('templates/footer_home'); ?>