<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Tambah Supplier</h2>
<form method="POST" action="">
    Nama Supplier: <input type="text" name="nama_supplier" required><br>
    Alamat: <textarea name="alamat" required></textarea><br>
    No. Telepon: <input type="text" name="no_telepon" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];

    $query = "INSERT INTO supplier (nama_supplier, alamat, no_telepon, email)
              VALUES ('$nama', '$alamat', '$no_telepon', '$email')";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>