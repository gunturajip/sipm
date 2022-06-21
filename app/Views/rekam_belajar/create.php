<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Tambah Data Rekam Belajar</b>
    <form action="<?= base_url("rekam_belajar/insert") ?>" method="post">
        <table>
            <tr>
                <td>ID User </td>
                <td>:</td>
                <td><input type="number" id="user_id" name="user_id"></td>
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