<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<h1>Messages</h1>
<a href="/messages/create" class="btn btn-primary mb-3">New Message</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Sender</th>
        <th>Message</th>
        <th>Read</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($messages as $message): ?>
        <tr>
            <td><?= $message['id'] ?></td>
            <td><?= $message['sender_id'] ?></td>
            <td><?= substr($message['message'], 0, 50) ?>...</td>
            <td><?= $message['is_read'] ? 'Yes' : 'No' ?></td>
            <td>
                <a href="/messages/read/<?= $message['id'] ?>" class="btn btn-info">Read</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection('content') ?>