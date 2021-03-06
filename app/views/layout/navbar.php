<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
<div class="container">
  <a class="navbar-brand" href="/?url=pages/index/"><?= TITLE  ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <!-- Right -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="?url=pages/index/">Home  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?url=pages/about/">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?url=posts/index/">Posts</a>
      </li>
    </ul>
  <!-- Left -->
    <ul class="navbar-nav ml-auto">
    <?php if(isset($_SESSION['user_id'])) : ?>
      <?php if(isAdmin()) : ?>
        <li class="nav-item">
            <a class="nav-link" href="?url=pages/dashboard/">Dashboard</a>
        </li>
      <?php endif ?>
      <li class="nav-item">
        <a class="btn btn-success" href="?url=users/logout/">Logout</a>
      </li>
    <?php else : ?>
      <li class="nav-item ">
        <a class="nav-link" href="?url=users/login/">Login  </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?url=users/register/">Register</a>
      </li>
    <?php endif ?>

    </ul>
  </div>
  </div>
</nav>