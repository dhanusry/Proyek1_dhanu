<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Alat</title>
</head>
<body>
    <a href="index.php">Kembali ke Home</a><br/><br/>
    <h3>Tambah Alat Elektromedis</h3>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Alat</td>
                <td><input type="text" name="nama_alat" required></td>
            </tr>
            <tr> 
                <td>No seri</td>
                <td><input type="text" name="no_seri" required></td>
            </tr>
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun" required></td>
            </tr>
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="merek" required></td>
            </tr>
            <tr> 
                <td>Lokasi</td>
                <td><input type="text" name="lokasi" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah Alat"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        // Menyimpan data yang dikirimkan
        $nama_alat = $_POST['nama_alat'];
        $tahun = $_POST['no_seri'];
        $tahun = $_POST['tahun'];
        $merek = $_POST['merek'];
        $lokasi = $_POST['lokasi'];

        // Menyertakan file koneksi database
        include_once("config.php");

        // Menyisipkan data ke dalam tabel
        $result = mysqli_query($mysqli, "INSERT INTO alat(nama_alat, no_seri, tahun, merek, lokasi) VALUES('$nama_alat', '$no_seri', '$tahun', '$merek', '$lokasi')");

        // Menampilkan pesan setelah data berhasil ditambahkan
        echo "Alat berhasil ditambahkan. <a href='index.php'>Lihat Data Alat</a>";
    }
    ?>
</body>
</html>