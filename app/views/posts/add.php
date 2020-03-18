<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/header.php'; ?>

<!-- Body -->
<a href="?url=posts" class="btn btn-secondary"> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Add Post</h2>
    <p>Create a post with this form</p>
    <form action="?url=posts/add" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg
         <?= (!empty($data['title_err'])) ? 'is-invalid' : '' ?>" 
         value="<?= $data['title'] ?>">
        <span class="invalid-feedback"><?= $data['title_err'] ?></span>
      </div>
      <div class="form-group">
        <label for="body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg 
          <?= (!empty($data['body_err'])) ? 'is-invalid' : '' ?>">
          <?= $data['body'] ?>
        </textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>


<!-- Header -->
<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>