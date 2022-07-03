<?= $this->extend('layout/template_belajar'); ?>

<?= $this->section('content'); ?>

<div class="row h-100 justify-content-center align-items-center">
    <div class="col-sm-12 col-md-12 col-lg-10 m-0">
        <div class="p-2 border bg-light text-center">
            <div class="d-grid col-7 col-sm-6 col-md-5 col-lg-4 p-2 my-2 mx-auto">
                <img src="..." class="img-thumbnail" alt="Gambar">
            </div>
            <div class="d-grid col-md-10 p-2 my-2 mx-auto">
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, nulla repellendus.</h3>
            </div>
            <div class="d-grid gap-1 col-7 col-sm-6 col-md-5 col-lg-4 p-2 my-2 mx-auto">
                <button type="button" class="btn btn-secondary">Jawaban</button>
                <button type="button" class="btn btn-secondary">Jawaban</button>
                <button type="button" class="btn btn-secondary">Jawaban</button>
                <button type="button" class="btn btn-secondary">Jawaban</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>