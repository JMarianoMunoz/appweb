<?php include("cabecera.php");?>

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div
            class="h-100 p-5 text-white bg-primary border rounded-2">
            <h2>¡Bienvenido a Renault!</h2>
            <hr class="my-2">
            <p>Estos son los carros reservados por mes.</p>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>

    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col"></div><div id="CalendarioWeb"></div>
            <div class="col"></div>
        </div>
    </div>

<script>
    $(document).ready(function()){
        $('CalendarioWeb').fullCalendar();

    }
</script>

</body>
</html>
