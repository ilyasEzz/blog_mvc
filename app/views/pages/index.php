<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body  -->
<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4"><?= $data['title'] ?></h1>
    <p class="lead"><?= $data['description'] ?></p>
  </div>
</div>

<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php' ?>