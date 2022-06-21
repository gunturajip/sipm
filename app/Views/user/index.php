<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<?php
foreach ($user as $row) {
  $id_user[] = $row->id;
  $email_user[] = $row->email;
}
?>

<div class="container">
  <a href="<?= base_url("user/create"); ?>" class="my-4 btn btn-primary"><i class="bi bi-plus-square"></i> User</a>

  <table class="table table-striped table-hover shadow rounded overflow-hidden ">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Foto Profil</th>
      <th>Aksi</th>
    </tr>
    <?php
    foreach ($user as $row) {
    ?>
      <tr>
        <td><?= $row->id; ?></td>
        <td><?= $row->nama; ?></td>
        <td><?= $row->email; ?></td>
        <td><?= $row->tanggal_lahir; ?></td>
        <td>
          <?php if ($row->jenis_kelamin === '1') {
            echo 'Laki-Laki';
          } else if ($row->jenis_kelamin === '0') {
            echo 'Perempuan';
          } else {
            echo 'Polosan';
          }; ?>
        </td>
        <td><?= $row->foto_profil; ?></td>
        <td>
          <a title="Edit" href="<?= base_url("user/edit/$row->id"); ?>" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
          <a title="Delete" href="<?= base_url("user/delete/$row->id"); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"><i class="bi bi-trash3"></i></a>
        </td>
      </tr>
    <?php
    }
    ?>
  </table>

  <div class="my-4 row row-cols-1 g-4 row-cols-lg-2 justify-content-center">
    <div class="col">
      <div class="shadow-lg rounded overflow-hidden">
        <div class="py-3 px-5 bg-dark text-white">Line chart</div>
        <canvas class="p-10" id="lineChart"></canvas>
      </div>
    </div>
    <div class="col">
      <div class="shadow-lg rounded overflow-hidden">
        <div class="py-3 px-5 bg-dark text-white">Bar chart</div>
        <canvas class="p-10" id="barChart"></canvas>
      </div>
    </div>
    <div class="col">
      <div class="shadow-lg rounded overflow-hidden">
        <div class="py-3 px-5 bg-dark text-white">Pie chart</div>
        <canvas class="p-10" id="pieChart"></canvas>
      </div>
    </div>
    <div class="col">
      <div class="shadow-lg rounded overflow-hidden">
        <div class="py-3 px-5 bg-dark text-white">Doughnut chart</div>
        <canvas class="p-10" id="doughnutChart"></canvas>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script>
  /* globals Chart:false, feather:false */

  (function() {
    'use strict'

    feather.replace({
      'aria-hidden': 'true'
    })

    // Graphs
    var linectx = document.getElementById('lineChart')
    // eslint-disable-next-line no-unused-vars
    var lineChart = new Chart(linectx, {
      type: 'line',
      data: {
        labels: <?= json_encode($email_user); ?>,
        datasets: [{
          label: 'ID User',
          data: <?= json_encode($id_user); ?>,
          backgroundColor: "hsl(252, 82.9%, 67.8%)",
          borderColor: "hsl(252, 82.9%, 67.8%)"
        }]
      },
      options: {}
    })

    // Graphs
    var barctx = document.getElementById('barChart')
    // eslint-disable-next-line no-unused-vars
    var barChart = new Chart(barctx, {
      type: 'bar',
      data: {
        labels: <?= json_encode($email_user); ?>,
        datasets: [{
          label: 'ID User',
          data: <?= json_encode($id_user); ?>,
          backgroundColor: "hsl(252, 82.9%, 67.8%)",
          borderColor: "hsl(252, 82.9%, 67.8%)"
        }]
      },
      options: {}
    })

    // Graphs
    var piectx = document.getElementById('pieChart')
    // eslint-disable-next-line no-unused-vars
    var pieChart = new Chart(piectx, {
      type: 'pie',
      data: {
        labels: <?= json_encode($email_user); ?>,
        datasets: [{
          label: 'ID User',
          data: <?= json_encode($id_user); ?>,
          backgroundColor: [
            "rgb(101, 143, 241)",
            "rgb(164, 101, 241)"
          ],
          hoverOffset: 4
        }]
      },
      options: {}
    })

    // Graphs
    var doughnutctx = document.getElementById('doughnutChart')
    // eslint-disable-next-line no-unused-vars
    var doughnutChart = new Chart(doughnutctx, {
      type: 'doughnut',
      data: {
        labels: <?= json_encode($email_user); ?>,
        datasets: [{
          label: 'ID User',
          data: <?= json_encode($id_user); ?>,
          backgroundColor: [
            "rgb(101, 143, 241)",
            "rgb(164, 101, 241)"
          ],
          hoverOffset: 4
        }]
      },
      options: {}
    })
  })()
</script>
<?= $this->endSection(); ?>