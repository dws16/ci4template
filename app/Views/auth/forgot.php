<?= $this->extend('templates/auth'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
  <div class="col-lg-7">
    <div class="card pt-5 px-5 border-left-success border-right-success">
      <div class="x_pannel">
        <div class="x_title">
          <h3>Forgot Password</h3>
        </div>
        <div class="x_content">
          <div class="row justify-content-center">
            <div class="col-xl-5 m-3 d-xl-block d-none" style="background-image: url(../images/forgot.svg);
                          background-position: center;
                          background-size: contain;
                          background-repeat:no-repeat;
                          ">
            </div>
            <div class="col-xl-5 col-lg-8 ml-4">
              <form action="/auth/forgot" method="post">
                <div class="row justify-content-center">
                  <p class="text-center">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-12">
                        <button type="submit" class="btn btn-success form-control">Reset Password</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>

              <div>
                <div class="row justify-content-center mt-3">
                  <a>Already have an account?</a>
                </div>
                <div class="row justify-content-center">
                  <a href="/auth/index">Login</a>
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