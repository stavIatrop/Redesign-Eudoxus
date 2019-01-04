<?php

    //$action = '';
    include("login.php");
    //debug_to_console("aaaaaaaaaaa");
    switch($_POST['action']) {
    case 'AuthUser':
        $usernameLog = $_POST['username'];
        $passLog = $_POST['password'];
        AuthUser($usernameLog, $passLog);
        break;
    default:
        // unknown / missing action
    }

    function AuthUser($username, $password){
        //include("login.php");
        $conn = OpenCon();
        
        $userQuery = "SELECT username FROM `User` WHERE username = '$username' AND password = '$password'";

        $userResults = mysqli_query($conn, $userQuery);
        
        if (mysqli_num_rows($userResults) == 0) {
            $val = 0;
            echo $val;
            return $val;
        } else {
            $val = 1;
            setcookie('username', $username);
            echo $val;
            return $val;
        }
        
        CloseCon($conn);
        //debug_to_console($optionsString);
        
    }

?>