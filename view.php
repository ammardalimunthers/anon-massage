<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesan Masuk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Pesan Anonim</h2>
    <?php
    $result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<div class='msg'><p>" . htmlspecialchars($row['message']) . "</p><small>" . $row['created_at'] . "</small></div>";
    }
    ?>
    <br>
    <a href="index.php">Kembali</a>
</body>
</html>
