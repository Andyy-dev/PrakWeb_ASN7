<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="style.css">

<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM supplier WHERE id_supplier=$id");
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Supplier</h2>
<form method="POST" action="">
    Nama Supplier: <input type="text" name="nama_supplier" value="<?php echo $row['nama_supplier']; ?>" required><br>
    Alamat: <textarea name="alamat" required><?php echo $row['alamat']; ?></textarea><br>
    No. Telepon: <input type="text" name="no_telepon" value="<?php echo $row['no_telepon']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];

    $query = "UPDATE supplier SET 
                nama_supplier='$nama', 
                alamat='$alamat', 
                no_telepon='$no_telepon', 
                email='$email' 
              WHERE id_supplier=$id";
    if (mysqli_query($conn, $query)) {
        echo "<div class='update-message'>
        <span>Data berhasil diupdate!</span>
        <a href='index.php' class='btn-kembali'>Kembali</a>
      </div>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>