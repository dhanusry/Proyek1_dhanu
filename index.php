<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sim RS - Data Alat Elektromedis</title>
    <style type="text/css">
        .header {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <b>Data Alat Elektromedis</b><br>
    <a href="add.php">Tambah Alat</a><br/><br/>

    <?php
    // Menyertakan file koneksi database
    include_once("config.php");

    // Mengambil data dari tabel 'alat'
    $result = mysqli_query($mysqli, "SELECT * FROM alat ORDER BY id DESC");
    ?>

    <table width="80%" border="1">
        <tr class="header">
            <th>Id</th>
            <th>Nama Alat</th>
            <th>No seri</th>
            <th>Tahun</th>
            <th>Merek</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>

        <?php  
        $i = 1;
        while ($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $user_data['nama_alat'] . "</td>";
            echo "<td>" . $user_data['no_seri'] . "</td>";
            echo "<td>" . $user_data['tahun'] . "</td>";
            echo "<td>" . $user_data['merek'] . "</td>";    
            echo "<td>" . $user_data['lokasi'] . "</td>";    
            echo "<td><a href='edit.php?id=" . $user_data['id'] . "'>Edit</a> | <a href='delete.php?id=" . $user_data['id'] . "'>Delete</a></td></tr>"; 
            $i++;       
        }
        ?>
    </table>
</body>
</html>