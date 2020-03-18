<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body  -->
<div class="row">
  <div class="col-md-6">
    <h1>Post Index</h1>
  </div>
  <div class="col-md-6 d-flex justify-content-end align-items-md-center">
    <a href="?url=posts/add/" class=" btn btn-primary">
       Add Post
    </a>
  </div>
</div>
<?php if($_SESSION['user_is_admin']): ?>
  <h2>Welcome Admin</h2>
<?php else: ?>
  <h2>You are not the admin go out!</h2>
<? endif ?>
<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>
