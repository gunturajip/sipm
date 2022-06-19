<?= $this->extend('layout/template_auth'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Materi</b>
    <form action="<?= base_url("materi/update/$materi->id") ?>" method="post">
        <table>
            <tr>
                <td>Judul </td>
                <td>:</td>
                <td><input type="text" id="judul" name="judul" value="<?= $materi->judul; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $materi->id; ?>">
            </tr>
            <tr>
                <td>Deskripsi </td>
                <td>:</td>
                <td><input type="text" id="deskripsi" name="deskripsi" value="<?= $materi->deskripsi; ?>"></td>
            </tr>
            <tr>
                <td>Link </td>
                <td>:</td>
                <td><input type="text" id="link" name="link" value="<?= $materi->link; ?>"></td>
            </tr>
            <tr>
                <td>ID Bab </td>
                <td>:</td>
                <td><input type="number" id="bab_id" name="bab_id" value="<?= $materi->bab_id; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>