<?php
    $room_type = $_GET['room_type'];
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 4 DatePicker</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="includes/book.inc.php" method="POST">
                <input type="hidden" name="room_type" value="<?php echo $room_type?>">
                <div class="col-sm-12 col-md-12">
                    <h2>Start Date</h2>
                    <input type="text" name="start-date" id="datepicker" width="276" />
                </div>
                    <div class="col-sm-12 col-md-12">
                        <h2>End Date</h2>
                        <input type="text" name="end-date" id="datepicker2" width="276" />
                    </div>
                </div>
                <br>
                <div class="col-sm-12 col-md-12">
                    <button type="submit" name="submit" class="btn btn-success">
                        Submit 
                    </button>
                </div>
            </form>
        </div>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
</body>
</html>