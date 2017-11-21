<?php 
$this->load->view('templates/header_home');
?>
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Supplier</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-industry"></i> Data Supplier</div>
        <div class="card-body">
          <div class="col-md-12 text-right" style="margin-bottom: 20px">
        <?php echo anchor(site_url("supplier/tambah"), '<i class="fa fa-plus"></i> Tambah Obat', 'class="btn btn-primary"'); ?>
      </div>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID Supplier</th>
              <th>Nama Supplier</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Telepon</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($supplier as $key => $value){ ?>
            <tr>
              <td><?php echo $value->id_supplier; ?></td>
              <td><?php echo $value->nama_supplier; ?></td>
              <td><?php echo $value->alamat; ?></td>
              <td><?php echo $value->kota; ?></td>
              <td><?php echo $value->telepon; ?></td>
              <td>
                <?php echo anchor(site_url('supplier/edit/'.$value->id_supplier),
                  '<i class="fa fa-pencil"></i>',
                  'class="btn btn-warning"'); ?>
                <?php  echo anchor(site_url('supplier/delete/'.$value->id_supplier),
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
