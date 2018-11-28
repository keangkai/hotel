<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login system using PDO</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css?v2">
    </head>
    <body>
        <form action="includes/signup.inc.php" method="post" class="container">
            <div class="col-md-5" style="margin: 150px auto 0 auto;">
                <h1>Sign up</h1>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12" style="text-align:center">
                            <input type="submit" name="submit" value="signup" class="btn btn-primary" style="margin-right: 20px;">
                            <a href="login.php">GO TO LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>