<?php
require '../aksi/koneksi.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['no_hp'];
    $fakultas = $_POST['email'];

    $result = mysqli_query($conn, "INSERT INTO Customer VALUES 
    ('', '$nama', '$no_hp', '$email')");

    if ($result) {
        echo "
        <script>
            alert('Data Berhasil DiTambahkan!');
            document.location.href = 'dashboard.php'
        </script>";
    }else {
        echo "
        <script>
            alert('Data Gagal DiTambahkan!');
            document.location.href = 'tambah.php'
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield">
                <label for="nim">No_Hp</label>
                <input type="text" name="no_hp" class="textfield">
                <label for="fakultas">Fakultas</label>
                <input type="text" name="email" class="textfield">
                <label for="prodi">Email</label>
            </form>
        </div>
    </section>
</body>
</html>