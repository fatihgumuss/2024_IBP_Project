<?= $this->extend('users/layouts/user') ?>
<?= $this->section('content') ?>
<div class="container">
    <h3 class="text-center">Books List</h3>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
        </tr>
        </thead>
        <tbody>
        <?php if($books): ?>
            <?php foreach($books as $book): ?>
                <tr>
                    <td><?= $book['id']; ?></td>
                    <td><?= $book['title']; ?></td>
                    <td><?= $book['author']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No books found</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection('content') ?>