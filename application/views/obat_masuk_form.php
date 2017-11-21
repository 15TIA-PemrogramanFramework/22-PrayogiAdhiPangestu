<?php $this->load->view('templates/header_home'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Tanggal</label>
		<input type="text" placeholder="Masukkan Tanggal" value="<?php echo $tanggal; ?>" class="form-control" name="tanggal">
	</div>	
	<div class="form-group">
		<label>Supplier</label>
		<select class="form-control" name="id_supplier" id="anggota" style="width: 100%;">
			<?php foreach ($supplier as $key => $value) { ?>
			<option value="<?php echo $value->id_supplier; ?>"><?php echo $value->nama_supplier;?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<input type="text" placeholder="Masukkan Keterangan" value="<?php echo $keterangan; ?>" class="form-control" name="keterangan">
	</div>
	<input type="hidden" name="id" value="<?php echo $id_faktur; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('obat_masuk') ?>" class="btn btn-primary">Cancel</a>
</form>
<?php $this->load->view('templates/footer_home'); ?>