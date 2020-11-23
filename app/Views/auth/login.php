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
          <?= view('Myth\Auth\Views\_message_block') ?>
          <div class="row justify-content-center">
            <div class="col-xl-5 m-3 d-xl-block d-none" style="background-image: url(../images/landing.svg);
                          background-position: center;
                          background-size: contain;
                          background-repeat:no-repeat;
                          ">
            </div>
            <div class="col-xl-5 col-lg-8 ml-4">
              <h3 class="text-center mb-4">Login</h3>
              <form action="<?= route_to('login') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>" id="email" required>
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="Password" id="password" required>
                      <div class="invalid-feedback">
                        <?= session('errors.password') ?>
                      </div>
                    </div>
                    <?php if ($config->allowRemembering) : ?>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                          <?= lang('Auth.rememberMe') ?>
                        </label>
                      </div>
                    <?php endif; ?>

                    <div class="row justify-content-center mt-4">
                      <div class="col-lg-5">
                        <button type="submit" class="btn btn-success form-control">Login</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row justify-content-center mt-3">
                <a href="/forgot">Forgot password?</a>
              </div>
              <div>
                <div class="row justify-content-center">
                  <a href="/register">Create your account!</a>
                </div>
              </div>
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="row justify-content-center mt-3">
            <p class="small">©<?= date('Y') ?> All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>