<?php

    //$action = '';
    include("login.php");
    //debug_to_console("aaaaaaaaaaa");
    switch($_POST['action']) {
    case 'AuthUser':
        $emailLog = $_POST['email'];
        $passLog = $_POST['password'];
        AuthUser($emailLog, $passLog);
        break;
    default:
        // unknown / missing action
    }

    function AuthUser($email, $password){
        include("user.class.php");
        $conn = OpenCon();
        
        $userQuery = "SELECT * FROM `User` WHERE email = '$email' AND password = '$password'";

        $userResults = mysqli_query($conn, $userQuery);
        
        if (mysqli_num_rows($userResults) == 0) {
            $val = 0;
            echo $val;
            return $val;
        } else {

            $row = mysqli_fetch_assoc($userResults);
            $user = new User(htmlspecialchars($row['userId']));
            $user->setUsername(htmlspecialchars($row['username']));
            $user->setEmail(htmlspecialchars($row['email']));
            $user->setPassword(htmlspecialchars($row['password']));
            $user->setCategory(htmlspecialchars($row['userCategory']));
            $user->setCategoryId(htmlspecialchars($row['categoryId']));
            $user->setUniName(htmlspecialchars($row['uniName']));
            $user->setUniDepartment(htmlspecialchars($row['uniDepartment']));

            $val = 1;
            setcookie('user', serialize($user), time() + 360000 );
            echo $val;
            return $val;
        }
        
        CloseCon($conn);
        //debug_to_console($optionsString);
        
    }

?>