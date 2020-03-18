<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body -->
<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
      <h2>Login</h2>
      <form action="?url=/users/login" method="post">
        <!-- Email -->
        <div class="form-group">
          <label for="email">Email: <sup>*</sup></label>
          <input 
            type="email" 
            name="email" 
            value="<?= $data['email'] ?>"
            class="form-control form-control-lg
            <?php echo(!empty($data['email_err'])) ? 'is_valid' : ''; ?>"
          >
          <span class="invalid-feedback"><?= $data['email_err'] ?></span>
        </div>
        <!-- Password -->
        <div class="form-group">
          <label for="password">Password: <sup>*</sup></label>
          <input 
            type="password" 
            name="password" 
            value="<?= $data['password'] ?>"
            class="form-control form-control-lg
            <?php echo(!empty($data['password_err'])) ? 'is_valid' : ''; ?>"
          >
          <span class="invalid-feedback"><?= $data['password_err'] ?></span>
        </div>
      

        <div class="row">
          <div class="col">
            <input type="submit" value="Register" class="btn btn-success btn-block">
          </div>
          <div class="col">
            <a href="/?url=users/register">
              No account? Register
            </a> 
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>

