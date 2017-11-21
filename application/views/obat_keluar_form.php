<?php $this->load->view('templates/header_home'); ?>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Tanggal</label>
		<input type="text" placeholder="Masukkan Tanggal" value="<?php echo $tanggal; ?>" class="form-control" name="tanggal">
	</div>	
	<div class="form-group">
		<label>Pasien</label>
		<input type="text" placeholder="Masukkan nama pasien" value="<?php echo $pasien; ?>" class="form-control" name="pasien">
	</div>
	<div class="form-group">
		<label>Obat</label>
		<select class="form-control" name="id_obat" id="anggota" style="width: 100%;">
			<?php foreach ($obat as $key => $value) { ?>
			<option value="<?php echo $value->id_obat; ?>"><?php echo $value->nama_obat;?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<input type="text" placeholder="Masukkan Keterangan" value="<?php echo $keterangan; ?>" class="form-control" name="keterangan">
	</div>
	<input type="hidden" name="id" value="<?php echo $id_faktur; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('obat_keluar') ?>" class="btn btn-primary">Cancel</a>	
</form>
<?php $this->load->view('templates/footer_home'); ?>