<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<h1><?= $data['post']->title ?></h1>

<div class="bg-secondary text-white p-2 mb-3">
  Written by <strong><?= $data['user']->name ?></strong> on  <?= $data['post']->created_at ?>
</div>
<p class="lead"><?= $data['post'] ->body ?></p>

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




<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>

