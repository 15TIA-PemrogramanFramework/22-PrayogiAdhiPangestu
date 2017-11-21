<?php $this->load->view('templates/header_login');?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
          <fieldset>
            <div class="form-group">
              <label>Username</label>
              <input class="form-control" placeholder="Enter Username" name="username" type="username" autofocus>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login" />
          </fieldset>
        </form>
      </div>
      <?php echo $this->session->flashdata('gagal'); ?>
    </div>
  </div>
  
  <?php $this->load->view('templates/footer_login');?>