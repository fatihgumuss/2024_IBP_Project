<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Read Message</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Message Details</h3>
                        </div>
                        <div class="card-body">
                            <p><strong>From:</strong> <?= $message['sender_id'] ?></p>
                            <p><strong>Message:</strong> <?= $message['message'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>