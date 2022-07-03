<?= $this->extend('layout/template_d_user'); ?>

<?= $this->section('content'); ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<div class="container">
  <div class="my-4 row row-cols-1 g-2 row-cols-2 justify-content-center">
    <div class="col">
      <div class="shadow-sm rounded overflow-hidden p-4">

        <div class="col-12 col-sm-auto mb-3">
          <div class="mx-auto" style="width: 140px;">
            <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
              <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
            </div>
          </div>
        </div>

        <div class="">
          <div class="text-center text-sm-left mb-2 mb-sm-0">
            <div class="mt-2">
              <label class="btn btn-primary">Change Photo<input type="file" id="imginp" hidden></label>
              <img id='img-upload' />
            </div>
          </div>
        </div>

        <div class="tab-content pt-3">
          <form class="form" action="<?= base_url("admin/update") ?>" method="post">
            <div class="mt-4">
              <label>Nama</label>
              <input class="form-control" type="text" name="name" value="">
            </div>

            <div class="mt-4">
              <label>Email</label>
              <input class="form-control" type="text" placeholder="user@example.com" value="">
            </div>

            <div class="mt-4">
              <label>Tanggal Lahir</label>
              <input class="form-control" type="date" required="" value="">
            </div>

            <div class="mt-4">
              <label>Jenis Kelamin</label>
              <br>
              <input type="radio" name="jenis_kelamin" value="Laki-Laki" required="">Laki-Laki
              <input type="radio" name="jenis_kelamin" value="Perempuan" required="">Perempuan
            </div>

            <div class="mb-2 mt-4"><b>Change Password</b></div>

            <div class="mt-4">
              <label>New Password</label>
              <input class="form-control" type="password" placeholder="••••••">
            </div>

            <div class="mt-4">
              <label>Confirm New Password</label>
              <input class="form-control" type="password" placeholder="••••••">
            </div>

            <div class="col d-flex justify-content-end tab-content pt-3">
              <button class="btn btn-primary" type="submit">Save Changes</button>
            </div>

          </form>

        </div>

      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>