<?php include 'koneksi.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Data Supplier</h2>
<a href="tambah.php">Tambah Supplier</a><br><br>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Nama Supplier</th>
        <th>Alamat</th>
        <th>No. Telepon</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM supplier");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row['id_supplier']."</td>
            <td>".$row['nama_supplier']."</td>
            <td>".$row['alamat']."</td>
            <td>".$row['no_telepon']."</td>
            <td>".$row['email']."</td>
            <td>
                <a href='edit.php?id=".$row['id_supplier']."'>Edit</a> |
                <a href='hapus.php?id=".$row['id_supplier']."' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>