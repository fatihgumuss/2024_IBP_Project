<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Add Book</h3>
            <form action="/books/store" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" name="author" required>
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" class="form-control" name="isbn" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Add</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>
