<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Soal</b>
    <form action="<?= base_url("admin/update/$admin->id") ?>" method="post">
        <table>
            <tr>
                <td>Deskripsi </td>
                <td>:</td>
                <td><input type="text" id="deskripsi" name="deskripsi" value="<?= $admin->deskripsi; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $admin->id; ?>">
            </tr>
            <tr>
                <td>Jawaban </td>
                <td>:</td>
                <td><input type="text" id="jawaban" name="jawaban" value="<?= $admin->jawaban; ?>"></td>
            </tr>
            <tr>
                <td>Link </td>
                <td>:</td>
                <td><input type="text" id="link" name="link" value="<?= $admin->link; ?>"></td>
            </tr>
            <tr>
                <td>ID Materi </td>
                <td>:</td>
                <td><input type="number" id="materi_id" name="materi_id" value="<?= $admin->materi_id; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>