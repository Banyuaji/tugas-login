<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman login</title>
</head>

<body>
    <div id="wrapper">
        <form action="logincontroller.php" method="POST">
            <h1>Login</h1>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Masukan username" required="" autofocus="">

            <label for="password">Password</label>
            <input type="text" name="password" id="password" placeholder="Masukan password" required="">

            <button type="submit">Login</button>
        </form>
    </div>

    <?php if (isset($_GET['pesan'])) { ?>
        <div class="error">
            <label for="">Oopss... <?php echo $_GET['pesan']; ?> </label>
        </div>
    <?php } ?>

</body>

</html>