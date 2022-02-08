<?php

session_start();

include 'sections/init.php';
include 'sections/formHandling.php';

?>

<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>Bus Ticketing System - Vanguardia</title>

</head>

    <?php
        include 'sections/navbar.php'
    ?>

    <?php
        include 'sections/book.php'
    ?>

    <?php
        include 'sections/buses.php'
    ?>

    <!-- Optional: to reset session for checking -->
    <?php
    // include 'sections/destroy.php' 
    ?>

    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>