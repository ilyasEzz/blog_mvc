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

<!-- Comments -->
<?php foreach($data['comments'] as $comment) : ?>
  <hr>
  <div class="card card-white post">
    <div class="post-heading">
      <div class="float-left image">
        <img src="public/assets/img/user_img.jpg" class="img-circle avatar" alt="profile image">
      </div>
      <div class="float-left meta">
        <strong class="title h5"> <?= $comment->author ?></strong> 
        <h6 class="text-muted time"><?= $comment->created_at ?></h6>
      </div>
    </div> 
    <div class="post-description"> 
      <p><?= $comment->text ?></p>
    </div>
  </div>
<?php endforeach ?>
        
<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>

