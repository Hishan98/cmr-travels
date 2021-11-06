<?php

include_once 'dbConnection.php';


if (isset($_POST['adminCreateRoute']) && $_POST['adminCreateRoute'] == true) {
    //define data
    $route_bus_number = $_POST['route_bus_number'];
    $route_to = $_POST['route_to'];
    $route_from = $_POST['route_from'];
    $route_arrival_time = $_POST['route_arrival_time'];
    $route_departure_time = $_POST['route_departure_time'];
    $route_cost = $_POST['route_cost'];


    $sql = "INSERT INTO `route`(`routeFrom`, `routeTo`, `departureTime`, `arrivalTime`, `busNumber`, `price`) 
    VALUES ('" . $route_from . "','" . $route_to . "','" . $route_departure_time . "','" . $route_arrival_time . "','" . $route_bus_number . "','" . $route_cost . "')";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Route Created']);
    } else {
        echo json_encode(['status' => '0', 'msg' => $con->error]);
    }
    $con->close();
} else if (isset($_POST['adminDeleteRoute']) && $_POST['adminDeleteRoute'] == true) {
    //define data
    $id = $_POST['id'];

    $sql = "DELETE FROM route WHERE id='" . $id . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Route Deleted']);
    } else {
        echo json_encode(['status' => '0', 'msg' => $con->error]);
    }
    $con->close();
} else if (isset($_POST['adminUpdateRoute']) && $_POST['adminUpdateRoute'] == true) {
    //define data
    $route_id = $_POST['up_route_id'];
    $route_bus_number = $_POST['up_route_bus_number'];
    $route_to = $_POST['up_route_to'];
    $route_from = $_POST['up_route_from'];
    $route_arrival_time = $_POST['up_route_arrival_time'];
    $route_departure_time = $_POST['up_route_departure_time'];
    $route_cost = $_POST['up_route_cost'];

    $sql = "UPDATE route SET routeFrom='" . $route_from . "', routeTo='" . $route_to . "',departureTime='" . $route_departure_time . "', arrivalTime='" . $route_arrival_time . "',busNumber='" . $route_bus_number . "',price='" . $route_cost . "' WHERE id='" . $route_id . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Route Updated']);
    } else {
        echo json_encode(['status' => '0', 'msg' => $con->error]);
    }
    $con->close();
} else {
    echo json_encode(['status' => '0', 'msg' => 'executed outside']);
}
