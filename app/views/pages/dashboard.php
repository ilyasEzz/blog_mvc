<?php
  require_once APP_ROOT . '/views/layout/header.php'; 
  message('user_message');
?>



<h2>Users</h2>
<table class="table table-striped  table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">created at</th>
        <th scope="col">is admin</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ( $data['users'] as $user) : ?>
    <tr>
        <th scope="row"><?= $user->id ?></th>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td><?= $user->created_at ?></td>
        <td><?php echo ($user->is_admin) ? "Yes" : "No"; ?></td>
        <td><a href="?url=users/edit/<?= $user->id ?>" class="btn btn-success">Edit</a></td>
        <td>
        <?php if($_SESSION['user_id'] != $user->id) : ?>
            <form  action="?url=users/delete/<?= $user->id ?>" method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        <?php endif ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<h2>Comments</h2>
<table class="table table-striped mt-4">
    <thead class="thead-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">post</th>
        <th scope="col">author</th>
        <th scope="col">text</th>
        <th scope="col">created at</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ( $data['comments'] as $comment) : ?>
    <tr>
        <th scope="row"><?= $comment->commentId ?></th>
        <td>
            <a href="?url=posts/show/<?= $comment->postId ?>">
                <?= $comment->postTitle ?>
            </a>
        </td>
        <td><?= $comment->author ?></td>
        <td><?= truncate($comment->text) ?></td>
        <td><?= $comment->commentCreated ?></td>
        <td><a href="?url=comments/edit/<?= $comment->id ?>" class="btn btn-success">Edit</a></td>
        <td>
        <?php if($_SESSION['comment_id'] != $comment->id) : ?>
            <form  action="?url=comments/delete/<?= $comment->commentId ?>" method="post">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        <?php endif ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>
