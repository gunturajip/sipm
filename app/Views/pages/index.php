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
                    Sima adalah sistem informasi pembelajaran matematika yang dikhususkan untuk anak sekolah dasar. Media pembelajaran berbasis website ini sangat tepat karena menggunakan sistem pembelajaran yang memuat berbagai media seperti teks, gambar, animasi, e-book digital, dan pendidik juga dapat menyajikan materi pembelajaran yang lebih menarik, tidak monoton serta memudahkan penyampaian kepada peserta didik.
                </p>
                <a href="" class="btn btn-secondary py-2 px-4 mb-5">Get Started</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid p-5 m-5" src="<?= base_url("img/math.png"); ?>" alt="" />
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
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h6 class="py-2 m-0">
                    Belajar Tanpa Memikirkan Biaya
                </h6>
                <p class="m-0">
                    Dapatkan materi dan soal langkap berkualitas secara gratis selamanya.
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h6 class="py-2 m-0">
                    Kenyamanan dan Fleksibilitas
                </h6>
                <p class="m-0">
                    Kamu bisa belajar kapan saja dan dari mana saja tanpa tenggat waktu.
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h6 class="py-2 m-0">
                    Sumber Belajar yang Bervariasi
                </h6>
                <p class="m-0">
                    Kamu bisa belajar dari latihan soal, menonton video, dan praktik mandiri.
                </p>
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
                                <h5 class="card-title">Contoh Bab untuk kelas</h5>
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
                                <h5 class="card-title">Contoh Bab untuk kelas</h5>
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
                                <h5 class="card-title">Contoh Bab untuk kelas</h5>
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
                                <h5 class="card-title">Contoh Bab untuk kelas</h5>
                                <p class="card-text fw-semibold text-primary">Gratis</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" class=" btn btn-secondary py-2 px-4 mt-3">Lihat Kelas Lainnya</a>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light py-3">
    <div class="container text-center">
        <p class="font-italic text-muted mb-0">&copy; Copyrights Sima.com All rights reserved.</p>
    </div>
</footer>

<!-- <div class="container py-5">
    <div class="row g-2 justify-content-evenly">
        <div class="col-md-3 m-0">
            <div class="bg-light shadow-sm border rounded p-4 h-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h4 class="py-2 m-0">
                    Belajar
                </h4>
                <p class="m-0">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="col-md-3 m-0">
            <div class="bg-light shadow-sm border rounded p-4 h-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h4 class="py-2 m-0">
                    Belajar
                </h4>
                <p class="m-0">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="col-md-3 m-0">
            <div class="bg-light shadow-sm border rounded p-4 h-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h4 class="py-2 m-0">
                    Belajar
                </h4>
                <p class="m-0">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
        <div class="col-md-3 m-0">
            <div class="bg-light shadow-sm border rounded p-4 h-100 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <h4 class="py-2 m-0">
                    Belajar
                </h4>
                <p class="m-0">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </div>
</div> -->

<?= $this->endSection(); ?>