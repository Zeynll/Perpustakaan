<?php
include 'db.php';

// Ambil kata kunci dari parameter GET
$searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';

// Query untuk pencarian
$query = "SELECT * FROM books WHERE 
          title LIKE '%$searchKeyword%' OR 
          author LIKE '%$searchKeyword%' OR 
          genre LIKE '%$searchKeyword%'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>
    <h1>Hasil Pencarian Buku</h1>

    <!-- Form Search -->
    <form method="GET" action="search.php">
        <input type="text" name="search" placeholder="Cari buku..." value="<?php echo htmlspecialchars($searchKeyword); ?>" />
        <button type="submit">Search</button>
        <a href="index.php">Kembali</a>
    </form>

    <!-- Tabel Hasil Pencarian -->
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
            <?php if (mysqli_num_rows($result) > 0) { ?>
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
            <?php } else { ?>
                <tr>
                    <td colspan="6">Tidak ada data yang sesuai dengan pencarian.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>