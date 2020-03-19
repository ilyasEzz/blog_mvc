<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>
<!-- Body -->
<a href="?url=posts" class="btn btn-secondary"> Back</a>
<div class="card card-body bg-light mt-5">
    <h2>Update User Information</h2>
    <form action="?url=users/edit/<?= $data['id'] ?>" method="post">
			<!-- Name -->
      <div class="form-group">
        <label for="name">Name: <sup>*</sup></label>
        <input type="text" name="name" class="form-control form-control-lg
        	<?= (!empty($data['name_err'])) ? 'is-invalid' : '' ?>"
          value="<?= $data['name'] ?>">
        <span class="invalid-feedback"><?= $data['name_err'] ?></span>
      </div>
			<!-- Email -->	
      <div class="form-group">
        <label for="email">email: <sup>*</sup></label>
        <input type="email" name="email" class="form-control form-control-lg
          <?= (!empty($data['email_err'])) ? 'is-invalid' : '' ?>"
          value="<?= $data['email'] ?>" /> 
        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
      </div>
			<!-- Password -->
      <div class="form-group">
        <label for="password">Password: <sup>*</sup></label>
        <input type="password" name="password" class="form-control form-control-lg
          <?= (!empty($data['password_err'])) ? 'is-invalid' : '' ?>"
          value="" /> 
        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
</div>

<?php print_r($data) ?>

<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>