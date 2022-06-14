<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Tambah Data Mahasiswa</b>
    <form action="<?= base_url("mahasiswa/insert") ?>" method="post">
        <table>
            <tr>
                <td>NPM </td>
                <td>:</td>
                <td><input type="text" id="npm" name="npm"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:</td>
                <td><input type="text" id="alamat" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>