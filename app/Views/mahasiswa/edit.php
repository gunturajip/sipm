<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Mahasiswa</b>
    <form action="<?= base_url("mahasiswa/update/$mahasiswa->id") ?>" method="post">
        <table>
            <tr>
                <td>NPM </td>
                <td>:</td>
                <td><input type="text" id="npm" name="npm" value="<?= $mahasiswa->npm; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $mahasiswa->id; ?>">
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" value="<?= $mahasiswa->nama; ?>"></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td>:</td>
                <td><input type="text" id="alamat" name="alamat" value="<?= $mahasiswa->alamat; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>