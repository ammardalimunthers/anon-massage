<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesan Anonim</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Kirim Saya Pesan Anonim</h2>
    <form method="POST">
        <textarea name="message" placeholder="Tulis pesanmu..." required></textarea><br>
        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $msg = $conn->real_escape_string($_POST['message']);
        $sql = "INSERT INTO messages (message) VALUES ('$msg')";
        if ($conn->query($sql)) {
            echo "<p style='color:green;'>Pesan berhasil dikirim!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
        }
    }
    ?>
    <br>
</body>
</html>
