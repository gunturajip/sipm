<div class="container">
  <?php
  if (session()->has('success')) {
  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session('success'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
<?php
  }
?>


<?= $this->extend('layout/template_d_user'); ?>

<?= $this->section('content'); ?>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php
  foreach ($kelas as $row) {
  ?>
    <div class="col">
      <div class="card p-3">
        <div class="card-body">
          <h3 class="card-title"><?= $row->nama; ?></h3>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <div class="text-center">
            <a href="<?= base_url("belajar/bab/$row->id"); ?>" class="btn btn-primary w-100">Mulai Belajar</a>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>

<?= $this->endSection(); ?>