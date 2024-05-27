<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Edit User</h3>
            <form action="/users/update" method="post">
                <div class="form-group">
                    <label for="id">User ID:</label>
                    <input type="number" class="form-control" name="id" value="<?= $user['id'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Role:</label>
                    <select class="form-control" name="role_id" required>
                        <option value="1" <?= ($user['role_id'] == 1) ? 'selected' : '' ?>>Admin</option>
                        <option value="2" <?= ($user['role_id'] == 2) ? 'selected' : '' ?>>Standard User</option>
                    </select>
                </div>
                <p></p>
                <button type="submit" class="btn btn-primary btn-block">Update</button>

        </div>
    </div>
</div>
<?= $this->endSection('content') ?>