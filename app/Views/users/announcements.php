<?= $this->extend('users/layouts/user') ?>
<?= $this->section('content') ?>
<div class="container">
    <h3 class="text-center">Announcements List</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        <?php if($announcements): ?>
            <?php foreach($announcements as $announcement): ?>
                <tr>
                    <td><?= $announcement['id']; ?></td>
                    <td><?= $announcement['title']; ?></td>
                    <td><?= $announcement['content']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No announcements found</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('content') ?>