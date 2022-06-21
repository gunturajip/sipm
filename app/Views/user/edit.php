<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Edit Data User</b>
    <form action="<?= base_url("user/update/$user->id") ?>" method="post">
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" value="<?= $user->nama; ?>"></td>
                <input type="hidden" id="id" name="id" value="<?= $user->id; ?>">
            </tr>
            <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="email" id="email" name="email" value="<?= $user->email; ?>"></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="password" id="password" name="password" value="<?= $user->password; ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir </td>
                <td>:</td>
                <td><input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $user->tanggal_lahir; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin </td>
                <td>:</td>
                <td>
                    <input class="form-check-input" type="radio" id="laki_laki" name="jenis_kelamin" value=1>
                    <label class="form-check-label" for="laki_laki">
                        Laki-Laki
                    </label>
                    <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value=0>
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </td>
            </tr>
            <tr>
                <td>Foto Profil </td>
                <td>:</td>
                <td><input type="text" id="foto_profil" name="foto_profil" value="<?= $user->foto_profil; ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Ubah"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>