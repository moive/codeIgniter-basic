<?php
    // echo $header_body;
    // echo view('structure/header');
?>
<body>
    <main class="container  mt-5">
        <!-- <h1>Welcome: <?php #echo $name?></h1>
        Here content body... <?php echo subtraction(5.5, 2.5)?> -->

        <h1>Users</h1>
        <div>
            <a class="btn btn-info my-3" href="<?php echo base_url()?>/HelloWorld/form">New User</a>
        </div>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
            <?php if ($users): ?>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['deleted_at'] != null ? $user['deleted_at'] : '0'  ?></td>
                <td>
                    <a class="btn btn-primary" href="<?= base_url()?>/HelloWorld/edit/<?php echo $user['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger" href="<?= base_url()?>/HelloWorld/delete/<?php echo $user['id'] ?>">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach?>
            <?php endif ?>
        </table>
    </main>
</body>
</html>