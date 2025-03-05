<?php
// Mengambil data dari file teks
$title = file_get_contents('1.txt');
$description = file_get_contents('3.txt');
$isiartikel = file_get_contents('2.txt');

// Menyimpan data yang diubah ke dalam file jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $isiartikel = $_POST['isiartikel'];

    // Menyimpan data ke file teks
    file_put_contents('1.txt', $title);
    file_put_contents('3.txt', $description);
    file_put_contents('2.txt', $isiartikel);

    echo "Data berhasil disimpan!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Konten</title>
</head>
<body>
    <h1>Edit Konten</h1>

    <!-- Form untuk mengubah title, description, dan isi artikel -->
    <form method="POST" action="">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($description); ?></textarea><br><br>

        <label for="isiartikel">Isi Artikel:</label><br>
        <textarea id="isiartikel" name="isiartikel" required><?php echo htmlspecialchars($isiartikel); ?></textarea><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
