<?= $this->extend('layout/template_guest'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="my-4 row row-cols-1 g-2 row-cols-2 justify-content-center">
        <div class="col">
            <div class="shadow-sm rounded overflow-hidden p-4">
                <div class="pb-4 text-center fw-bold fs-3">Selamat Datang Kembali!</div>
                <form action="<?= base_url("admin") ?>" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold">Alamat Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 g-2 row-cols-2 justify-content-center">
        <div class="col">
            <div class="shadow-sm rounded overflow-hidden p-4 text-center">
                <span>Atau <a href="<?= base_url("register"); ?>" class="text-decoration-none fw-bold"> klik sini</a> untuk membuat akun gratismu.</span>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>