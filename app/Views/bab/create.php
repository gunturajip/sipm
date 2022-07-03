<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Tambah Data Bab</b>
    <form action="<?= base_url("bab/insert") ?>" method="post">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td>ID Kelas </td>
                <td>:</td>
                <td><input type="number" id="kelas_id" name="kelas_id"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>