<?php

include_once 'dbConnection.php';


if (isset($_POST['createBus']) && $_POST['createBus'] == true) {
    //define data
    $busNumber = $_POST['busNumber'];
    $busName = $_POST['busName'];
    $busType = $_POST['busType'];


    $sql = "INSERT INTO bus (busNumber, busName, busType) 
    VALUES ('" . $busNumber . "','" . $busName . "','" . $busType . "')";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Created']);
    } else {
        echo json_encode(['status' => '0', 'msg' => 'error']);
    }
    $con->close();
} else if (isset($_POST['deleteBus']) && $_POST['deleteBus'] == true) {
    //define data
    $busNumber = $_POST['busNumber'];

    $sql = "DELETE FROM bus WHERE busNumber='" . $busNumber . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Deleted']);
    } else {
        echo json_encode(['status' => '0', 'msg' => 'error']);
    }
    $con->close();
} else if (isset($_POST['updateBus']) && $_POST['updateBus'] == true) {
    //define data
    $busNumber = $_POST['busNumber'];
    $busName = $_POST['busName'];
    $busType = $_POST['busType'];

    $sql = "UPDATE bus SET busName='" . $busName . "', busType='" . $busType . "' WHERE busNumber='" . $busNumber . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Updated']);
    } else {
        echo json_encode(['status' => '0', 'msg' => 'error']);
    }
    $con->close();
} else {
    echo json_encode(['status' => '0', 'msg' => 'executed outside']);
}
