<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Tambah Data Soal</b>
    <form action="<?= base_url("soal/insert") ?>" method="post">
        <table>
            <tr>
                <td>Deskripsi </td>
                <td>:</td>
                <td><input type="text" id="deskripsi" name="deskripsi"></td>
            </tr>
            <tr>
                <td>Jawaban </td>
                <td>:</td>
                <td><input type="text" id="jawaban" name="jawaban"></td>
            </tr>
            <tr>
                <td>Link </td>
                <td>:</td>
                <td><input type="text" id="link" name="link"></td>
            </tr>
            <tr>
                <td>ID Materi </td>
                <td>:</td>
                <td><input type="number" id="materi_id" name="materi_id"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>