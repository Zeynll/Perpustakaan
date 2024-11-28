<?php
include 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM books WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['published_year'];
    $genre = $_POST['genre'];

    $query = "UPDATE books SET title='$title', author='$author', published_year='$year', genre='$genre' WHERE id=$id";
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
    <title>Edit Buku</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Edit Buku</h1>
    <form method="POST">
        <input type="text" name="title" value="<?= $data['title'] ?>" required>
        <input type="text" name="author" value="<?= $data['author'] ?>" required>
        <input type="number" name="published_year" value="<?= $data['published_year'] ?>" required>
        <input type="text" name="genre" value="<?= $data['genre'] ?>">
        <button type="submit" class="btn">Update</button>
    </form>
</body>
</html>
