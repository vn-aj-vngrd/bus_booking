<?php

if (isset($_POST['submit'])) {
    // assign POST values
    $name = $_POST['name'];
    $dest = $_POST['dest'];
    $num = ($_POST['bus']);
    $bus = getBus($num);

    // check for slots
    if (count($_SESSION[$bus]) < $MAX_BUS) {

        // update values
        $_SESSION['ticketNo'] += 1;
        $_SESSION['totalSales'] += $fare;

        // assign passenger to object
        $passenger = array(
            "ticketNo" => $_SESSION['ticketNo'],
            "name" => $name,
            "dest" => $dest,
            "bus" => $num,
            "fare" => $fare,
        );

        updatePassenger($passenger);
        // echo count($_SESSION['b_two']);
        
    } else {
        // Bus n is full
        // echo count($_SESSION[$bus]);
        echo '<script>alert("Error: Bus ' . $num . ' is currently full.")</script>';
        
    }
}

?>