<body>
    <main class="container  mt-5">
        <!-- <h1>Welcome: <?php #echo $name ?></h1>
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
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['deleted_at'] != null ? $user['deleted_at'] : '0'  ?></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo base_url()?>/HelloWorld/edit?id=<?php echo $user['id'] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <?php echo form_button(array(
                        'name'=>'delete',
                        'type'=>'submit',
                        'class'=>'btn btn-danger',
                        'content'=>'<i class="fas fa-trash"></i>'
                    ));?>
                </td>
            </tr>
            <?php endforeach?>
        </table>
    </main>
</body>
</html>