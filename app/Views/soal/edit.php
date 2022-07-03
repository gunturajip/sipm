<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Soal</b>
    <form action="<?= base_url("soal/update/$soal->id") ?>" method="post">
        <table>
            <tr>
                <td>Deskripsi </td>
                <td>:</td>
                <td><input type="text" id="deskripsi" name="deskripsi" value="<?= $soal->deskripsi; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $soal->id; ?>">
            </tr>
            <tr>
                <td>Link Soal </td>
                <td>:</td>
                <td><input type="text" id="link_soal" name="link_soal" value="<?= $soal->link_soal; ?>"></td>
            </tr>
            <tr>
                <td>Jawaban </td>
                <td>:</td>
                <td><input type="text" id="jawaban" name="jawaban" value="<?= $soal->jawaban; ?>"></td>
            </tr>
            <tr>
                <td>Link Jawaban </td>
                <td>:</td>
                <td><input type="text" id="link_jawaban" name="link_jawaban" value="<?= $soal->link_jawaban; ?>"></td>
            </tr>
            <tr>
                <td>Kunci Jawaban </td>
                <td>:</td>
                <td><input type="text" id="kunci_jawaban" name="kunci_jawaban" value="<?= $soal->kunci_jawaban; ?>"></td>
            </tr>
            <tr>
                <td>ID Materi </td>
                <td>:</td>
                <td><input type="number" id="materi_id" name="materi_id" value="<?= $soal->materi_id; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>