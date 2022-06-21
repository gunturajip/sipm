<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Bab</b>
    <form action="<?= base_url("bab/update/$bab->id") ?>" method="post">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" value="<?= $bab->nama; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $bab->id; ?>">
            </tr>
            <tr>
                <td>ID Admin </td>
                <td>:</td>
                <td><input type="number" id="admin_id" name="admin_id" value="<?= $bab->admin_id; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>