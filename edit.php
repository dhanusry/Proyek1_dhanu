<?php
// Menyertakan file koneksi database
include_once("config.php");

// Jika form disubmit, lakukan update data
if (isset($_POST['update'])) {   
    $id = $_POST['id'];
    $nama_alat = $_POST['nama_alat'];
    $no_seri = $_POST['no_seri'];
    $tahun = $_POST['tahun'];
    $merek = $_POST['merek'];
    $lokasi = $_POST['lokasi'];

    // Update data dalam tabel
    $result = mysqli_query($mysqli, "UPDATE alat SET nama_alat='$nama_alat', no_seri='$no_seri', tahun='$tahun', merek='$merek', lokasi='$lokasi' WHERE id=$id");

    // Redirect ke halaman utama setelah update
    header("Location: index.php");
}
?>

<?php
// Menampilkan data alat yang akan diedit berdasarkan ID
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM alat WHERE id=$id");

while ($user_data = mysqli_fetch_array($result)) {
    $nama_alat = $user_data['nama_alat'];
    $no_seri = $user_data['no_seri'];
    $tahun = $user_data['tahun'];
    $merek = $user_data['merek'];
    $lokasi = $user_data['lokasi'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Alat</title>
</head>
<body>
    <a href="index.php">Kembali ke Home</a><br/><br/>

    <h3>Edit Data Alat</h3>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Alat</td>
                <td><input type="text" name="nama_alat" value="<?php echo $nama_alat; ?>" required></td>
            </tr>
            <tr> 
                <td>No seri</td>
                <td><input type="text" name="no_seri" value="<?php echo $no_seri; ?>" required></td>
            </tr>
            <tr> 
                <td>Tahun</td>
                <td><input type="text" name="tahun" value="<?php echo $tahun; ?>" required></td>
            </tr>
            <tr> 
                <td>Merek</td>
                <td><input type="text" name="merek" value="<?php echo $merek; ?>" required></td>
            </tr>
            <tr> 
                <td>Lokasi</td>
                <td><input type="text" name="lokasi" value="<?php echo $lokasi; ?>" required></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>