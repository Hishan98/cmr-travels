<?php

include_once 'dbConnection.php';


if (isset($_POST['adminCreatePassenger']) && $_POST['adminCreatePassenger'] == true) {
    //define data
    $passenger_fname = $_POST['passenger_fname'];
    $passenger_lname = $_POST['passenger_lname'];
    $passenger_nic = $_POST['passenger_nic'];
    $passenger_phone = $_POST['passenger_phone'];
    $passenger_gender = $_POST['passenger_gender'];
    $passenger_email = $_POST['passenger_email'];
    $passenger_password = $_POST['passenger_password'];

    $md5_pass = md5($passenger_password);
    $crypt_pass = crypt($md5_pass, "db");
    $shal_pass = Sha1($crypt_pass); //encrypting password


    $sql = "INSERT INTO passenger(nic, fname, lname, gender, phone, email, password) 
    VALUES ('" . $passenger_nic . "','" . $passenger_fname . "','" . $passenger_lname . "','" . $passenger_gender . "','" . $passenger_phone . "','" . $passenger_email . "','" . $shal_pass . "')";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Passenger Created']);
    } else {
        echo json_encode(['status' => '0', 'msg' => $con->error]);
    }
    $con->close();
} else if (isset($_POST['adminDeletePassenger']) && $_POST['adminDeletePassenger'] == true) {
    //define data
    $passenger_nic = $_POST['nic'];

    $sql = "DELETE FROM passenger WHERE nic='" . $passenger_nic . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Passenger Deleted']);
    } else {
        echo json_encode(['status' => '0', 'msg' => $con->error]);
    }
    $con->close();
} else if (isset($_POST['adminUpdatePassenger']) && $_POST['adminUpdatePassenger'] == true) {
    //define data
    $passenger_nic = $_POST['up_passenger_nic'];
    $passenger_fname = $_POST['up_passenger_fname'];
    $passenger_lname = $_POST['up_passenger_lname'];
    $passenger_phone = $_POST['up_passenger_phone'];
    $passenger_gender = $_POST['up_passenger_gender'];
    $passenger_email = $_POST['up_passenger_email'];
    $passenger_password = $_POST['up_passenger_password'];

    $md5_pass = md5($passenger_password);
    $crypt_pass = crypt($md5_pass, "db");
    $shal_pass = Sha1($crypt_pass); //encrypting password

    $sql = "UPDATE passenger SET fname='" . $passenger_fname . "',lname='" . $passenger_lname . "', gender='" . $passenger_gender . "',phone='" . $passenger_phone . "', email='" . $passenger_email . "',password='" . $shal_pass . "' WHERE nic='" . $passenger_nic . "'";

    if ($con->query($sql) === TRUE) {
        echo json_encode(['status' => '1', 'msg' => 'Updated']);
    } else {
        echo json_encode(['status' => '0', 'msg' => $con->error]);
    }
    $con->close();
} else {
    echo json_encode(['status' => '0', 'msg' => 'executed outside']);
}
