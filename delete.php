<?php
include 'db.php';

$id = $_GET['id'];

if (isset($_GET['hapus'])) {
    // Hapus data jika tombol hapus ditekan
    $query = "DELETE FROM books WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Penghapusan</title>
</head>
<body>
    <p>Apakah Anda yakin ingin menghapus buku dengan ID <?php echo $id; ?>?</p>
    <form action="" method="get">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" name="hapus" onclick="return confirm('Apakah Anda yakin?');">Hapus</button>
    </form>
</body>
</html>