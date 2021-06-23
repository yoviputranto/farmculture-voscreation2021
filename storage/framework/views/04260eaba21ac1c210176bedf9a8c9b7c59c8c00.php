<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Log in</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body { 
        background-color: #fff;
      }

      .container {
        position: relative;
        margin-top: 60px;
        width: 1120px;
        max-height: 665px;
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.25);
      }

      .logo {
        position: absolute;
        top: 20px;
        left: 20px;
      }

      form {
        margin: 0 0 0 100px;
      }

      @media (max-width: 767px) {
        form
          {
              margin: 0;
          }
      }

      h1 {
        font-family: 'Poppins', Helvetica, serif;
        font-weight: 500;
        font-size: 28px
      }

      button {
        width: 100%;
      }

      .login-image {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
      }


    </style>
  </head>
  <body>
    <section class="form">
      <div class="container g-0">
        <div class="row g-0">
          <div class="col-lg-6 align-self-center">
            <img src="<?php echo e(asset('assets/icons/navbar-logo-green.png')); ?>" class="logo d-none d-lg-block" width="100px" alt="">
            <div class="form-row">
              <div class="col-4 col-sm-8 col-lg-8 p-5 p-lg-0">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <h1>Please Log In</h1>
                  <input type="email" class="form-control mt-5 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus >
                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <input type="password" class="form-control mt-3 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" name="password" required autocomplete="current-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  <div class="my-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="remember">
                        <?php echo e(__('Remember Me')); ?>

                    </label>
                  </div>
                  <button type="submit" class="btn btn-success d-flex justify-content-center"><?php echo e(__('Login')); ?></button>
                    <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?>

                        </a>
                    <?php endif; ?>
                  
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="<?php echo e(asset('assets/pictures/login-image.png')); ?>" class="login-image img-fluid d-none d-lg-block" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH D:\Yovi\Kuliah\Lomba\farm_culture\resources\views/auth/login.blade.php ENDPATH**/ ?>