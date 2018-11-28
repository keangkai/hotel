<?php
    session_start();

    if (isset($_POST["submit"])) {
        require 'db.inc.php';
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (empty($email) || empty($password)) {
            header("location: ../login.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM login WHERE email=?";
            $stmt = $con->prepare($sql);
            $stmt->execute(array($email));
            $row_count = $stmt->rowCount();
            if ($row_count < 1) {
                header("location: ../lohin.php?login=error");
                exit();
            } else {
                if ($row = $stmt->fetch()) {
                    $hashedPwdCheck = password_verify($password, $row["password"]);
                    if ($hashedPwdCheck == false) {
                        header("location: ../login.php?login=error");
                        exit();
                    } else if ($hashedPwdCheck == true) {
                        $_SESSION['id'] = $row["id"];
                        $_SESSION['name'] = $row["name"];
                        $_SESSION['email'] = $row["email"];
                        header("location: ../index.php");
                        exit();
                    }
                }
            }
        }
    } else {
        header("location: ../login.php");
        exit();
    }
