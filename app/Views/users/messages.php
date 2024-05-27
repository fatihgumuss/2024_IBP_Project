<?= $this->extend('users/layouts/user') ?>
<?= $this->section('content') ?>
<div class="container">
    <h3 class="text-center">Send Message</h3>
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    <form action="/user/messages/store" method="post">
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Send</button>
    </form>
</div>
<?= $this->endSection('content') ?>