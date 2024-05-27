<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<body>

<h1>New Message</h1>

<form action="/messages/store" method="post">
    <div class="form-group">
        <label for="receiver_id">Select User</label>
        <select name="receiver_id" id="receiver_id" class="form-control">
            <?php foreach ($users as $user): ?>
                <option value="<?= $user['id'] ?>"><?= $user['email'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" class="form-control" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Send</button>
</form>
</body>
<?= $this->endSection() ?>
