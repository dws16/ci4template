<?= $this->extend('templates/auth'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
  <div class="col-lg-7">
    <div class="card pt-5 px-5 border-left-success border-right-success">
      <div class="x_pannel">
        <div class="x_title">
          <h3>Register an Account</h3>
        </div>
        <div class="x_content">
          <div class="row justify-content-center">
            <div class="col-xl-4 m-3 d-xl-block d-none" style="background-image: url(../images/register.svg);
                          background-position: center;
                          background-size: contain;
                          background-repeat:no-repeat;
                          ">
            </div>
            <div class="col-xl-5 col-lg-8 ml-4">
              <form action="/auth/register" method="post">
                <div class="row justify-content-center">
                  <div class="col-lg-12 my-5">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Name" id="name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password1" placeholder="Password" id="password1">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password2" placeholder="Confirm Password" id="password2">
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-5">
                        <button type="submit" class="btn btn-success form-control">Submit</button>
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