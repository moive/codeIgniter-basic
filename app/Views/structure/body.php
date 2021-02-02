<body>
    <main class="container  mt-5">
        <!-- <h1>Welcome: <?php #echo $name ?></h1>
        Here content body... <?php echo subtraction(5.5, 2.5)?> -->

        <h1>Users</h1>

        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Deleted</th>
            </tr>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['deleted_at'] != null ? $user['deleted_at'] : '0'  ?></td>
            </tr>
            <?php endforeach?>
        </table>
    </main>
</body>
</html>