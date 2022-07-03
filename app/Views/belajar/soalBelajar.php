<?= $this->extend('layout/template_belajar'); ?>

<?= $this->section('content'); ?>

<div class="row h-100 justify-content-center align-items-center">
    <div class="col-sm-12 col-md-12 col-lg-10 m-0">
        <div class="p-2 border bg-light text-center">
            <!-- <div class="d-grid col-7 col-sm-6 col-md-5 col-lg-4 p-2 my-2 mx-auto">
                <img src="<?= base_url(""); ?>" class="img-thumbnail" alt="Gambar Soal">
            </div> -->
            <div class="d-grid col-md-10 p-2 my-2 mx-auto">
                <h3><?= $soal->deskripsi; ?></h3>
            </div>
            <div class="d-grid gap-1 col-7 col-sm-6 col-md-5 col-lg-4 p-2 my-2 mx-auto">
                <?php
                foreach ($jawaban as $j) {
                ?>
                    <a href="<?= base_url("belajar/cekJawaban/$soal->id/$j"); ?>" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalBenar">
                        <?= $j; ?>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBenar" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h3 class="modal-title">Jawaban kamu sudah benar!</h3>
            </div>
            <div class="modal-body">
                <img src="<?= base_url("img/benar.svg"); ?>" style="height: 200px;" alt="Jawaban Benar" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close sementara</button>
                <button type="button" class="btn btn-primary">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalSalah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h3 class="modal-title">Jawaban kamu belum benar!</h3>
            </div>
            <div class="modal-body">
                <img src="<?= base_url("img/salah.svg"); ?>" style="height: 200px;" alt="Jawaban Salah" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Belajar kembali</button>
                <button type="button" class="btn btn-primary">Jawab ulang</button>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>