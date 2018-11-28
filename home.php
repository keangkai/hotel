<?php
    session_start();
    if (!isset($_SESSION["id"])) {
        header("location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
        <link rel="stylesheet" href="css/style.css?v2">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);font-size:5em;">Welcome <span style="color: red;"><?php echo ucfirst($_SESSION['name']); ?></span></h1>
            <div class="row">
                <div class="col-lg-9"></div>
                <div class="col-lg-3">
                    <a href="includes/logout.inc.php" style="padding: 20px;">log out</a>
                </div>
            </div>
        </div>
    </body>
</html>