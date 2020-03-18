<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body  -->
<div class="row mb-3">
  <div class="col-md-6">
    <h1>Post Index</h1>
  </div>
  <div class="col-md-6 d-flex justify-content-end align-items-md-center">
    <a href="?url=posts/add/" class=" btn btn-primary">
       Add Post
    </a>
  </div>
</div>

<?php foreach($data['posts'] as $post) : ?>
  <div class="card card-body mb-3">
    <h4 class="card-title"><?= $post->title ?></h4>
    <span class="bg-light p-2 mb-3">
      Written by <?= $post->name ?> at <?= $post->postCreated ?>
    </span>
    <p class="card-text "><?= $post->body ?> </p>
    <a href="?url=posts/show/<?= $post->postId ?>" class="btn btn-dark">
      More
    </a>
  </div>
<?php endforeach ?>


<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>
