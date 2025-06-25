<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="style.css">

<?php
$id = $_GET['id'];
$query = "DELETE FROM supplier WHERE id_supplier=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>