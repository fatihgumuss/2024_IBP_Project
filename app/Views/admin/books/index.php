<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
            <h1>Book List</h1>
            <a href="/books/create" class="btn btn-primary mb-3">New Book</a>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($books as $book): ?>
                    <tr>
                        <td><?= $book['id'] ?></td>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['isbn'] ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
<?= $this->endSection('content') ?>