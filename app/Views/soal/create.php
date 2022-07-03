<?= $this->extend('layout/template_d_admin'); ?>

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
                <td>Link Soal </td>
                <td>:</td>
                <td><input type="text" id="link_soal" name="link_soal"></td>
            </tr>
            <tr>
                <td>Jawaban </td>
                <td>:</td>
                <td><input type="text" id="jawaban" name="jawaban"></td>
            </tr>
            <tr>
                <td>Link Jawaban </td>
                <td>:</td>
                <td><input type="text" id="link_jawaban" name="link_jawaban"></td>
            </tr>
            <tr>
                <td>Kunci Jawaban </td>
                <td>:</td>
                <td><input type="text" id="kunci_jawaban" name="kunci_jawaban"></td>
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