<?php
require_once APP_ROOT . '/views/layout/header.php'; ?>

<h1>Welcome <?= $_SESSION['user_name'] ?></h1>

<table class="table table-striped  table-dark">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">created at</th>
        <th scope="col">is admin</th>
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
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once APP_ROOT . '/views/layout/footer.php'; ?>