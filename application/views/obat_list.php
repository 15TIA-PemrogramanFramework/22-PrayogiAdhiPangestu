<?php 
$this->load->view('templates/header_home');
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Obat</li>
</ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-medkit"></i> Data Obat</div>
    <div class="card-body">
      <div class="col-md-12 text-right" style="margin-bottom: 20px">
        <?php echo anchor(site_url("obat/tambah"), '<i class="fa fa-plus"></i> Tambah Obat', 'class="btn btn-primary"'); ?>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Obat</th>
              <th>Nama Obat</th>
              <th>Kategori</th>
              <th>Stok</th>
              <th>Satuan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($obat as $key => $value){ ?>
            <tr>
              <td><?php echo $value->id_obat; ?></td>
              <td><?php echo $value->nama_obat; ?></td>
              <td><?php echo $value->kategori; ?></td>
              <td><?php echo $value->stok; ?></td>
              <td><?php echo $value->satuan; ?></td>
              <td>
                <?php echo anchor(site_url('obat/edit/'.$value->id_obat),
                  '<i class="fa fa-pencil"></i>',
                  'class="btn btn-warning"'); ?>
                <?php  echo anchor(site_url('obat/delete/'.$value->id_obat),
                  '<i class="fa fa-trash"></i>',
                  'class="btn btn-danger"'); ?>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <?php 
  $this->load->view('templates/footer_home');
  ?>
