<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Tambah Data Materi</b>
    <form action="<?= base_url("materi/insert") ?>" method="post">
        <table>
            <tr>
                <td>Judul </td>
                <td>:</td>
                <td><input type="text" id="judul" name="judul"></td>
            </tr>
            <tr>
                <td>Deskripsi </td>
                <td>:</td>
                <td><input type="text" id="deskripsi" name="deskripsi"></td>
            </tr>
            <tr>
                <td>Link </td>
                <td>:</td>
                <td><input type="text" id="link" name="link"></td>
            </tr>
            <tr>
                <td>ID Bab </td>
                <td>:</td>
                <td><input type="number" id="bab_id" name="bab_id"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>