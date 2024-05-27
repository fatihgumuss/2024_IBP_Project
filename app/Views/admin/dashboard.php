<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">User List</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= ($user['role_id'] == 1) ? 'Admin' : 'Standard User' ?></td>
                        <td>
                            <a href="<?= site_url('/users/edit/' . $user['id']) ?>" class="btn btn-success">Edit</a>
                            <a href="<?= site_url('/users/delete/' . $user['id']) ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= site_url('/users/create') ?>" class="btn btn-primary mb-3">Create User</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Book Control Panel</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['id'] ?></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td>
                            <a href="<?= site_url('/books/delete/' . $book['id']) ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= site_url('/books/create') ?>" class="btn btn-primary mb-3">Add Book</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Announcement Control Panel</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($announcements as $announcement): ?>
                    <tr>
                        <td><?= $announcement['id'] ?></td>
                        <td><?= $announcement['title'] ?></td>
                        <td><?= $announcement['content'] ?></td>
                        <td>
                            <a href="<?= site_url('/announcements/edit/' . $announcement['id']) ?>" class="btn btn-success">Edit</a>
                            <a href="<?= site_url('/announcements/delete/' . $announcement['id']) ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= site_url('/announcements/create') ?>" class="btn btn-primary mb-3">Add Announcement</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center">Messages Control Panel</h3>
            <a href="/messages" class="btn btn-primary mb-3">View Messages</a>
            <a href="/messages/create" class="btn btn-primary mb-3">New Message</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
