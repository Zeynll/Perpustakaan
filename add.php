<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $query = "INSERT INTO books (title, author, published_year, genre) VALUES ('$title', '$author', '$year', '$genre')";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Judul Buku" required>
        <input type="text" name="author" placeholder="Penulis" required>
        <input type="number" name="published_year" placeholder="Tahun Terbit" required>
        <input type="text" name="genre" placeholder="Genre">
        <button type="submit" class="btn">Simpan</button>
    </form>
</body>
</html>
