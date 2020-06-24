<?php
    session_start();

    if ($_SESSION['status']=="") {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Admin</title>
</head>

<body>
    <h1>Hello! Selamat Datang : <?php echo $_SESSION['nama']; ?> </h1>

    <br>
    <a href="logout.php">Klik disini untuk logout.</a>
</body>

</html>