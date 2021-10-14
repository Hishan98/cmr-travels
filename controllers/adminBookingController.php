<?php

include_once 'dbConnection.php';


if (isset($_POST['adminCreateBooking']) && $_POST['adminCreateBooking'] == true) {
    //define data
    $booking_passenger_id = $_POST['booking_passenger_id'];
    $booking_seat_id = $_POST['booking_seat_id'];
    $booking_route_id = $_POST['booking_route_id'];
    $booking_date = $_POST['booking_date'];


    $sql = "INSERT INTO `booking`(`passengerId`, `seatId`, `routeId`, `date`) 
    VALUES ('" . $booking_passenger_id . "','" . $booking_seat_id . "','" . $booking_route_id . "','" . $booking_date . "')";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Booking Created']);
    } else {
        echo json_encode(['status' => '0', 'msg' => 'error']);
    }
    $con->close();
} else if (isset($_POST['adminDeleteBooking']) && $_POST['adminDeleteBooking'] == true) {
    //define data
    $id = $_POST['id'];

    $sql = "DELETE FROM booking WHERE id='" . $id . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Booking Deleted']);
    } else {
        echo json_encode(['status' => '0', 'msg' => 'error']);
    }
    $con->close();
} else if (isset($_POST['adminUpdateBooking']) && $_POST['adminUpdateBooking'] == true) {
    //define data
    $booking_id = $_POST['up_booking_id'];
    $booking_passenger_id = $_POST['up_booking_passenger_id'];
    $booking_seat_id = $_POST['up_booking_seat_id'];
    $booking_route_id = $_POST['up_booking_route_id'];
    $booking_route_id = $_POST['up_booking_date'];

    $sql = "UPDATE booking SET passengerId='" . $booking_passenger_id . "', seatId='" . $booking_seat_id . "',routeId='" . $booking_route_id . "',date='" . $booking_route_id . "' WHERE id='" . $booking_id . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Booking Updated']);
    } else {
        echo json_encode(['status' => '0', 'msg' => 'error']);
    }
    $con->close();
} else {
    echo json_encode(['status' => '0', 'msg' => 'executed outside']);
}
