<?= $this->extend('layouts/frontend.php') ?>

<?= $this->section('content') ?>

<header>
    <h1>Welcome Students</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($students) : ?>
                <?php foreach ($students as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['course']; ?></td>
                        <td>
                            <a href=""><b>Edit</b></a>
                            <a href=""><b>Delete</b></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
    </table>
</header>
<?= $this->endSection() ?>