<?= $this->extend('layout/template_d_user'); ?>

<?= $this->section('content'); ?>

<div class="card">
  <div class="card-body">
    <h4 class="card-title"><?= $kelas->nama; ?></h4>
    <?php
    foreach ($bab as $b) {
    ?>
      <div class="py-1">
        <a class="btn btn-light col-11 border text-start" data-bs-toggle="collapse" href="#collapse<?= $b->id; ?>" aria-expanded="false" aria-controls="collapse<?= $b->id; ?>">
          <?= $b->nama; ?>
        </a>
        <a href="<?= base_url("belajar/materi/$b->id"); ?>" class="btn btn-primary col-auto">Pelajari</a>
      </div>

      <div class="collapse col-11" id="collapse<?= $b->id; ?>">
        <div class="card card-body text-start py-2 px-0">
          <?php
          foreach ($materi as $m) {
          ?>
            <div class="px-3 py-1">
              
              <?= $m->judul; ?>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</div>

<?= $this->endSection(); ?>