<?= $this->extend('layout/template_guest'); ?>

<?= $this->section('content'); ?>

<div class="bg-light">
  <div class="container py-5 px-2">
    <div class="row h-100 align-items-center py-2">
      <h1 class="display-5 pb-5" style="text-align:center">About us</h1>
      <div class="col-lg-6">
        <h2 class="display-9">Sima</h2>
        <p class=" text-muted ">Sima adalah sistem informasi pembelajaran matematika yang dikhususkan untuk anak sekolah dasar. Media pembelajaran berbasis website ini sangat tepat karena menggunakan sistem pembelajaran yang memuat berbagai media seperti teks, gambar, animasi, e-book digital, dan pendidik juga dapat menyajikan materi pembelajaran yang lebih menarik, tidak monoton serta memudahkan penyampaian kepada peserta didik.</p>
      </div>
      <div class="col-lg-6 d-block d-lg-block px-5"><img src="<?= base_url("img/math.png"); ?>" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-light py-2">
  <div class="container py-2">
    <div class="row mb-4">
      <div class="col-lg-15">
        <h1 class="display-7 font-weight-light" style="text-align:center">Our team</h1>
        <p class="font-italic text-muted" style="text-align:center">We deliver world wide!!</p>
      </div>
    </div>

    <div class="row text-center">
      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/zudin.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Muhammad Izzudin</h5><span class="small text-uppercase text-muted">20082010060</span>
          <h5 class="small text-muted">zuddinizzuddin14@gmail.com</h5>
          <h5 class="small text-muted">085155435175</h5>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/guntur.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Guntur Aji Pratama</h5><span class="small text-uppercase text-muted">20082010045</span>
          <h5 class="small text-muted">gunturaji852@gmail.com</h5>
          <h5 class="small text-muted">081913068027</h5>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/abil.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Sabilar Rosad</h5><span class="small text-uppercase text-muted">20082010065</span>
          <h5 class="small text-muted">sabilar36@gmail.com</h5>
          <h5 class="small text-muted">087856183967</h5>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-3 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/nilam.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Nilam Kumallah A.</h5><span class="small text-uppercase text-muted">20082010069</span>
          <h5 class="small text-muted">nilamanggreani23@gmail.com</h5>
          <h5 class="small text-muted">08993651889</h5>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-4 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/zilvi.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Zilvi Azus Sriyanti</h5><span class="small text-uppercase text-muted">20082010057</span>
          <h5 class="small text-muted">zilvia524@gmail.com</h5>
          <h5 class="small text-muted">082132765871</h5>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-4 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/hafiz.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Hafizh Abiyyu F.</h5><span class="small text-uppercase text-muted">20082010064</span>
          <h5 class="small text-muted">20082010064@student.upnjatim.ac.id</h5>
          <h5 class="small text-muted">082330590905</h5>
        </div>
      </div>
      <!-- End-->

      <!-- Team item-->
      <div class="col-xl-4 col-sm-6 mb-5">
        <div class="bg-white rounded shadow-sm py-5 px-4"><img src="<?= base_url("img/sahlan.jpeg"); ?>" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
          <h5 class="mb-0">Mochammad Sahlan A.</h5><span class="small text-uppercase text-muted">20082010072</span>
          <h5 class="small text-muted">20082010072@student.upnjatim.ac.id</h5>
          <h5 class="small text-muted">085748383162</h5>
        </div>
      </div>
      <!-- End-->


    </div>
  </div>
</div>


<footer class="bg-light pb-5">
  <div class="container text-center">
    <p class="font-italic text-muted mb-0">&copy; Copyrights sima.com All rights reserved.</p>
  </div>
</footer>


<?= $this->endSection(); ?>