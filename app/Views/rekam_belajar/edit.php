<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Rekam Belajar</b>
    <form action="<?= base_url("rekam_belajar/update/$rekam_belajar->id") ?>" method="post">
        <table>
            <tr>
                <td>ID User </td>
                <td>:</td>
                <td><input type="number" id="user_id" name="user_id" value="<?= $rekam_belajar->user_id; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $rekam_belajar->id; ?>">
            </tr>
            <tr>
                <td>ID Materi </td>
                <td>:</td>
                <td><input type="number" id="materi_id" name="materi_id" value="<?= $rekam_belajar->materi_id; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>