<?php
session_start();

if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header('location:profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>

    <div class="container">

        <?php if (isset($_GET['register']) && !empty($_GET['register']) && $_GET['register'] == 'true') { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-success">You are registred successfulllllyyy ! </div>
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['error']) && !empty($_GET['error']) && $_GET['error'] == 'true') { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger">Email or/and password incorrect(s) ! </div>
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['logout']) && !empty($_GET['logout']) && $_GET['logout'] == 'true') { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-info">Logged Out ! </div>
                </div>
            </div>
        <?php } ?>

        <?php if (isset($_GET['login']) && !empty($_GET['login']) && $_GET['login'] == 'false') { ?>
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger">You are not loggedIn ! </div>
                </div>
            </div>
        <?php } ?>

        <form method="POST" action="../controllers/userController.php?event=login">
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>