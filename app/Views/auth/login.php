<?= $this->extend('templates/auth'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
  <div class="col-lg-7">
    <div class="card pt-5 px-5 border-left-success border-right-success">
      <div class="x_pannel">
        <div class="x_title">
          <h3>Welcome to B401 ITS</h3>
        </div>
        <div class="x_content">
          <div class="row justify-content-center">
            <div class="col-xl-5 m-3 d-xl-block d-none" style="background-image: url(../images/landing.svg);
                          background-position: center;
                          background-size: contain;
                          background-repeat:no-repeat;
                          ">
            </div>
            <div class="col-xl-5 col-lg-8 ml-4">
              <h3 class="text-center mb-4">Login</h3>
              <form action="/auth/login" method="post">
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Email" id="email" required>
                      <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                    </div>
                    <div class="row justify-content-end mr-1">
                      <a href="/auth/forgot">Forgot password?</a>
                    </div>
                    <div class="row justify-content-center mt-4">
                      <div class="col-lg-5">
                        <button type="submit" class="btn btn-success form-control">Login</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <div>
                <div class="row justify-content-center mt-3">
                  <a href="/auth/register">Create your account!</a>
                </div>
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="row justify-content-center mt-3">
            <p class="small">©2020 All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>