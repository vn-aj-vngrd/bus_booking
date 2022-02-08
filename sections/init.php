<?php

function getBus($var)
{
    switch ($var) {
        case 1:
            return "b_one";
            break;
        case 2:
            return "b_two";
            break;
        case 3:
            return "b_three";
            break;
        case 4:
            return "b_four";
            break;
        case 5:
            return "b_five";
            break;
    }
}

function updatePassenger($passenger)
{

    if ($passenger['bus'] == 1) {
        $_SESSION['b_one'][] = $passenger;
    } else if ($passenger['bus'] == 2) {
        $_SESSION['b_two'][] = $passenger;
    } else if ($passenger['bus'] == 3) {
        $_SESSION['b_three'][] = $passenger;
    } else if ($passenger['bus'] == 4) {
        $_SESSION['b_four'][] = $passenger;
    } else {
        $_SESSION['b_five'][] = $passenger;
    }
}

$fare = 50;
$passenger;
$MAX_BUS = 5;

if (empty($_SESSION['b_one'])) {
    $_SESSION['b_one'] = array();
}

if (empty($_SESSION['b_two'])) {
    $_SESSION['b_two'] = array();
}

if (empty($_SESSION['b_three'])) {
    $_SESSION['b_three'] = array();
}

if (empty($_SESSION['b_four'])) {
    $_SESSION['b_four'] = array();
}

if (empty($_SESSION['b_five'])) {
    $_SESSION['b_five'] = array();
}

if (empty($_SESSION['totalSales'])) {
    $_SESSION['totalSales'] = 0;
}

if (empty($_SESSION['ticketNo'])) {
    $_SESSION['ticketNo'] = 0;
}

?>