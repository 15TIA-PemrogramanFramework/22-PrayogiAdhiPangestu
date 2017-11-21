<?php 
$this->load->view('templates/header_home');
?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">Obat Masuk</li>
</ol>
<!-- Example DataTables Card-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-cart-plus"></i> Data Obat Masuk</div>
    <div class="card-body">
      <div class="col-md-12 text-right" style="margin-bottom: 20px">
        <?php echo anchor(site_url("obat_masuk/tambah"), '<i class="fa fa-plus"></i> Obat Masuk', 'class="btn btn-primary"'); ?>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Faktur</th>
              <th>Tanggal</th>
              <th>Supplier</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($obat_masuk as $key =>$value){ ?>
            <tr>
              <td><?php echo $value->id_faktur; ?></td>
              <td><?php echo $value->tanggal; ?></td>
              <td><?php echo $value->nama_supplier; ?></td>
              <td><?php echo $value->keterangan; ?></td>
              <td>
                <?php echo anchor(site_url('obat_masuk/edit/'.$value->id_faktur),
                  '<i class="fa fa-pencil"></i>',
                  'class="btn btn-warning"'); ?>
                <?php  echo anchor(site_url('obat_masuk/delete/'.$value->id_faktur),
                  '<i class="fa fa-trash"></i>',
                  'class="btn btn-danger"'); ?>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
    </div>
  </div>
  <!-- /.container-fluid-->
  <?php 
  $this->load->view('templates/footer_home');
  ?>
