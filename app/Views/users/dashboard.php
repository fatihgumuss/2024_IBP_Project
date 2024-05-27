<?= $this->extend('users/layouts/user') ?>
<?= $this->section('content') ?>
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h1>User Dashboard</h1>
                <p></p>
                <h4>Welcome, <?= session()->get('email'); ?></h4>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection('content') ?>