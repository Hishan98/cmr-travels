<?php
include_once 'dbConnection.php';

if (isset($_POST['userLogPassword'])) {
    if (isset($_POST['userLogin']) && $_POST['userLogin'] == true) {

        $userEmail = $_POST['userLogEmail'];
        $userPassword = $_POST['userLogPassword'];

        $md5_pass = md5($userPassword);
        $crypt_pass = crypt($md5_pass, "db");
        $shal_pass = Sha1($crypt_pass); //encrypting password

        $Query = "SELECT * FROM passenger WHERE email = '" . $userEmail . "'";
        try {
            $Result = $con->query($Query);
            if ($Result->num_rows > 0) {
                while ($r = $Result->fetch_assoc()) {
                    if ($r["password"] == $shal_pass) {
                        echo json_encode(['status' => '1', 'msg' => 'Logged in']);
                    } else {
                        echo json_encode(['status' => '0', 'msg' => 'Incorrect password']);
                    }
                }
            } else {
                echo json_encode(['status' => '0', 'msg' => 'Email Address not found !']);
            }
        } catch (Exception $th) {
            echo json_encode(['status' => '0', 'msg' => $th]);
        }
    }
} else if (isset($_POST['userReg']) && $_POST['userReg'] == true) {
    //define data
    $userFname = $_POST['userFname'];
    $userLname = $_POST['userLname'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];


    if ($userPassword == $userRePassword) {

        $md5_pass = md5($userPassword);
        $crypt_pass = crypt($md5_pass, "db");
        $shal_pass = Sha1($crypt_pass); //encrypting password

        $sql = "INSERT INTO passenger(fname, lname, email, password) VALUES ('" . $userFname . "','" . $userLname . "','" . $userEmail . "','" . $shal_pass . "')";

        if ($con->query($sql) === TRUE) {
            echo json_encode(['status' => '1', 'msg' => 'Account Created']);
        } else {
            echo json_encode(['status' => '0', 'msg' => 'Sql error']);
        }
        $con->close();
    } else {
        echo json_encode(['status' => '0', 'msg' => 'Password Mismatch']);
    }
} else {
    echo json_encode(['status' => '0', 'msg' => 'Outside error']);
}
