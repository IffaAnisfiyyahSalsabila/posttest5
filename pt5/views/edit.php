<?php
require "../aksi/koneksi.php";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM Customer where id=$id");

$customer = [];

while ($row = mysqli_fetch_assoc($result)){
    $customer[] = $row;
}

$customer = $customer[0];


if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    $result = mysqli_query($conn, "UPDATE customer SET nama = '$nama', no_hp='$no_hp', email='$email' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = 'dashboard.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = 'edit.php'
        </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?php echo $customer['nama']?>" class="textfield">
                <label for="nim">No_Hp</label>
                <input type="text" name="no_hp" value="<?php echo $customer['no_hp']?>" class="textfield">
                <label for="fakultas">Email</label>
                <input type="text" name="email" value="<?php echo $customer['email']?>" class="textfield">
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>