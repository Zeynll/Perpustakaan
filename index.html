<?php
include 'db.php';

// Tambahkan Buku (proses data dari form)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $published_year = $_POST['published_year'];
    $genre = $_POST['genre'];

    // Query untuk menambahkan data ke database
    $insertQuery = "INSERT INTO books (title, author, published_year, genre) 
                    VALUES ('$title', '$author', '$published_year', '$genre')";

    if (mysqli_query($conn, $insertQuery)) {
        echo "<script>alert('Buku berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan buku.');</script>";
    }
}

// Ambil semua data buku
$query = "SELECT * FROM books";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <h1>Manajemen Buku Perpustakaan</h1>

    <!-- Form Search -->
    <form method="GET" action="search.php">
        <input type="text" name="search" placeholder="Cari buku berdasarkan judul, penulis, atau genre..." />
        <button type="submit">Search</button>
    </form>

    <!-- Form Tambahkan Buku -->
    <h2><center>Tambahkan Buku</center></h2>
    <form method="POST" action="index.php">
        <input type="text" name="title" placeholder="Judul Buku" required />
        <input type="text" name="author" placeholder="Penulis" required />
        <input type="number" name="published_year" placeholder="Tahun Terbit" required />
        <input type="text" name="genre" placeholder="Genre" required />
        <button type="submit">Tambahkan Buku</button>
    </form>

    <!-- Tabel Data Buku -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Genre</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['author']; ?></td>
                    <td><?php echo $row['published_year']; ?></td>
                    <td><?php echo $row['genre']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>