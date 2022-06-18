<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <b>Tambah Data User</b>
    <form action="<?= base_url("user/insert") ?>" method="post">
        <table>
            <tr>
                <td>Email </td>
                <td>:</td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:</td>
                <td><input type="text" id="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit"></td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection(); ?>