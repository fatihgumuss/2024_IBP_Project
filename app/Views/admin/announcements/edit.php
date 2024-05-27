<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Edit Announcement</h3>
            <form action="/announcements/update/<?= $announcement['id'] ?>" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" value="<?= $announcement['title'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" name="content" rows="4" required><?= $announcement['content'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>