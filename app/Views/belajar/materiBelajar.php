<?= $this->extend('layout/template_belajar'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-md-12 col-lg-8 mx-auto">
        <div class="pb-3 text-center">
            <h3><?= $materi->judul; ?></h3>
        </div>
        <div class="ratio ratio-16x9">
            <iframe src="<?= $materi->link; ?>" title="<?= $materi->deskripsi; ?>" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>