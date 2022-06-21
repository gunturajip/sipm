<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data Admin</b>
    <form action="<?= base_url("admin/update/$admin->id") ?>" method="post">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" value="<?= $admin->nama; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $admin->id; ?>">
            </tr>
            <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="<?= $admin->email; ?>"></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="<?= $admin->password; ?>"></td>
            </tr>
            <tr>
                <td>Foto Profil </td>
                <td>:</td>
                <td><input type="text" id="foto_profil" name="foto_profil" value="<?= $admin->foto_profil; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>