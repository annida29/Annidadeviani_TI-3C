<div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register</p>

      <form action="<?= base_url('registrasi') ?>" method="post">
        <!-- untuk kolom nama lengkap -->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama_lengkap" name="nama_lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"> <?= form_error('nama_lengkap') ?></small>
        <!-- untuk kolom email -->
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"> <?= form_error('email') ?></small>
        <!-- untuk kolom password -->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"> <?= form_error('password') ?></small>
        <!-- untuk kolom repassword -->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Tulis ulang Password" id="repassword" name="repassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"> <?= form_error('repassword') ?></small>
        <div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

      <a href="<?= base_url('login') ?>">Back to log In</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->