<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Pemrograman Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script language="javascript">
    function cekform() {
        if(document.mhs.txtnama.value==""){
            alert('Nama Harus Diisi');
            document.mhs.txtnama.focus();
            return false;
        } else if(document.mhs.txtalamat.value==""){
            alert('Alamat Harus Diisi');
            document.mhs.txtalamat.focus();
            return false;
        } else if(document.mhs.txtpekerjaan.value==""){
            alert('Pekerjaan Harus Diisi');
            document.mhs.txtpekerjaan.focus();
            return false;
        } else {
            return true;
        }
    }
    </script>
</head>
<body>
    <div class="judul">
        <h1>Praktikum Pemrograman Web</h1>
        <h2>Politeknik Negeri Batam</h2>
    </div>
    <br/>
    <a href="index.php">Lihat Semua Data</a>
    <br/>
    <h3>Edit data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysqli = mysqli_query("SELECT * FROM user WHERE id='")or die(mysql_error());
    $nomor = 1;
    while($data = mysqli_fetch_array($query_mysqli)){
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
<?php } ?>
</body>
</html>