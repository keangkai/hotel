<?php

    // require 'includes/db.inc.php';
    require 'db.inc.php';

    // var_dump($start_date_array);
    $active = true;
    if (isset($_POST["submit"])) {
        $room_type = $_POST["room_type"];
        $start_date = $_POST["start-date"];
        $end_date = $_POST["end-date"];

        $start_date_array = explode("/", $start_date);
        $end_date_array = explode("/", $end_date);
        if (empty($start_date) || empty($end_date)) {
            header("location: ../form.php?err=empty");
            exit();
        } else {
            $sql = "SELECT * FROM booking_room WHERE room_type='$room_type' AND room_number=1 ";
            $stmt = $con->query($sql);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $room_active = $result["active"];

            if ($room_active) {
                $sql = "UPDATE booking_room SET room_type='$room_type', room_number=1, active='n'";
                $stmt = $con->query($sql);
            } else {
                $sql = "UPDATE booking_room SET room_type='$room_type', room_number=2, active='n'";
                $stmt = $con->query($sql);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $room_active = $result["active"];
                if ($room_active) {
                    $sql = "INSERT INTO booking_room(room_type, room_number, active) VALUES ('$room_type', 2, 'n')";
                    $stmt = $con->query($sql);
                } else {
                    echo "<script>alert('ห้องเต็ม');location='../form.php';</script>";
                    exit();
                }
            }
            echo $room_active;
        }
    } else {
        header("location: ../form.php?err=empty");
        exit();
    }
