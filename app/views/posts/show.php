<!-- Header -->
<?php
  require_once APP_ROOT . '/views/layout/header.php'; 
  message('comment_message')  
?>


<!-- Post Info -->
<div class="bg-secondary text-white p-2 mb-3">
  Written by <strong><?= $data['user']->name ?></strong> on  <?= $data['post']->created_at ?>
</div>

<!-- Edit / Delete -->
<?php if($data['post']->user_id  == $_SESSION['user_id']) : ?>
  <div class="row">
    <a href="?url=posts/edit/<?= $data['post']->id ?>"
      style="flex-basis: 0;"
      class=" btn btn-primary"> Edit
    </a>
  
    <form class="col offset-md-10" action="?url=posts/delete/<?= $data['post']->id ?>" method="post">
      <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div> 
  <hr>
<?php endif ?>

<h1><?= $data['post']->title ?></h1>

<p class="lead"><?= $data['post'] ->body ?></p>

<hr>
<!-- Write Comment -->
<div class="card card-body bg-light">
  <form action="?url=posts/show/<?= $data['post']->id ?>" method="post">
      <label for="text">Comment : </label>
      <textarea class="form-control" name="comment"  cols="20" rows="5"></textarea>
    <input type="submit" value="submit" class="btn btn-success mt-3">
  </form>
</div>
        

<!-- Show Comments -->
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
      <form class="col offset-md-10" action="?url=comments/delete/<?= $comment->id ?>" method="post">
        <input type="submit" value="Delete" class="btn btn-danger">
      </form>
    </div> 
    <div class="post-description"> 
      <p><?= $comment->text ?></p>
    </div>
  </div>
<?php endforeach ?>


<!-- Footer -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>

