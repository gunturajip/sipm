<?= $this->extend('layout/template_guest'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h4 class="mb-3 pt-5">
                    Sima E-learning
                </h4>
                <h1 class="display-3 fw-bold mb-3">
                    Platform Belajar Matematika
                </h1>
                <p class="mb-4">
                    Media pembelajaran berbasis website menggunakan sistem pembelajaran yang menggunakan media teks, gambar, dan animasi.
                </p>
                <a href="" class="btn btn-primary py-2 px-4 mb-5">Get Started</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid py-5" src="<?= base_url("img/bg.svg"); ?>" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-2 justify-content-evenly px-5">
        <h3 class="m-0 mb-3 text-center">
            Kenapa Harus Belajar di Sima?
        </h3>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <img class="img-fluid pb-1" style="height: 200px;" src="<?= base_url("img/1.svg"); ?>" alt="" />
                <h5 class="py-2">
                    Belajar Tanpa Memikirkan Biaya
                </h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <img class="img-fluid pb-1" style="height: 200px;" src="<?= base_url("img/2.svg"); ?>" alt="" />
                <h5 class="py-2">
                    Kenyamanan dan Fleksibilitas
                </h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <img class="img-fluid pb-1" style="height: 200px;" src="<?= base_url("img/3.svg"); ?>" alt="" />
                <h5 class="py-2">
                    Sumber Belajar yang Bervariasi
                </h5>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light">
    <div class="container p-5">
        <h3 class="mb-2">
            Pilihan Materi Belajar
        </h3>
        <h5 class="mb-4">
            Terdapat banyak pilihan kelas yang seru dengan aktivitas belajar yang menyenangkan.
        </h5>
        <div class="p-5 border">
            <div class="row g-2">
                <div class="col-lg-3 col-md-6 px-2 my-2">
                    <a href="#" class="link-dark text-decoration-none">
                        <div class="card mb-3 h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><b>Kelas 1 SD</b> – Belajar bilangan cacah 0-99</h6>
                                <p class="card-text fw-semibold text-primary">Gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 px-2 my-2">
                    <a href="#" class="link-dark text-decoration-none">
                        <div class="card mb-3 h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><b>Kelas 1 SD</b> – Penjumlahan dan Pengurangan</h6>
                                <p class="card-text fw-semibold text-primary">Gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 px-2 my-2">
                    <a href="#" class="link-dark text-decoration-none">
                        <div class="card mb-3 h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><b>Kelas 1 SD</b> – Pengenalan satuan waktu dan Panjang</h6>
                                <p class="card-text fw-semibold text-primary">Gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 px-2 my-2">
                    <a href="#" class="link-dark text-decoration-none">
                        <div class="card mb-3 h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title"><b>Kelas 1 SD</b> – Nilai Tempat dan Penggunaannya</h6>
                                <p class="card-text fw-semibold text-primary">Gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class=" btn btn-primary py-2 px-4 mt-3">Lihat Kelas Lainnya</a>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light py-3">
    <div class="container text-center">
        <p class="font-italic text-muted mb-0">&copy; Copyrights Sima.com All rights reserved.</p>
    </div>
</footer>

<?= $this->endSection(); ?>