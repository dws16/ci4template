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
          <?= view('Myth\Auth\Views\_message_block') ?>
          <div class="row justify-content-center">

            <div class="col-xl-4 m-3 d-xl-block d-none" style="background-image: url(../images/register.svg);
                          background-position: center;
                          background-size: contain;
                          background-repeat:no-repeat;
                          ">
            </div>
            <div class="col-xl-5 col-lg-8 ml-4">
              <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row justify-content-center">
                  <div class="col-lg-12 my-5">
                    <div class="form-group">
                      <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email" id="email" value="<?= old('email') ?>">
                      <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="Full Name" id="fullname" value="<?= old('fullname') ?>">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="Username" id="username" value="<?= old('username') ?>">
                    </div>
                    <div class=" form-group">
                      <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="Password" id="password" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="Repeat Password" id="pass_confirm" autocomplete="off">
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-lg-5">
                        <button type="submit" class="btn btn-success form-control">Register</button>
                      </div>

                    </div>
                  </div>
                </div>
              </form>

              <div>
                <div class="row justify-content-center mt-3">
                  <a href="<?= route_to('login') ?>">
                    <p><?= lang('Auth.alreadyRegistered') ?> <?= lang('Auth.signIn') ?></p>
                  </a>
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