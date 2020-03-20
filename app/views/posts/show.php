<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Post Info -->
<h1><?= $data['post']->title ?></h1>

<div class="bg-secondary text-white p-2 mb-3">
  Written by <strong><?= $data['user']->name ?></strong> on  <?= $data['post']->created_at ?>
</div>
<p class="lead"><?= $data['post'] ->body ?></p>

<!-- Edit / Delete -->
<?php if($data['post']->user_id  == $_SESSION['user_id']) : ?>
  <hr>
  <div class="row">
    <a href="?url=posts/edit/<?= $data['post']->id ?>"
      style="flex-basis: 0;"
      class=" btn btn-primary"> Edit
    </a>
  
    <form class="col offset-md-10" action="?url=posts/delete/<?= $data['post']->id ?>" method="post">
      <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div> 
  
<?php endif ?>
<hr>
<!-- Comments -->
<div class="card card-white post">
  <div class="post-heading">
    <div class="float-left image">
      <img src="public/assets/img/user_img.jpg" class="img-circle avatar" alt=profile image">
    </div>
    <div class="float-left meta">
      <div class="title h5">
        <strong> Ryan Haywood</strong> made a post.
      </div>
      <h6 class="text-muted time">1 minute ago</h6>
    </div>
  </div> 
  <div class="post-description"> 
    <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap cssjs framework. Codes for developers and web designers</p>
  </div>
</div>
        


<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>

