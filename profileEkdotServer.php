<?php

    include("login.php");
    include('user.class.php');
    switch($_POST['action']) {
    case 'UpdateProfileEkdot':
        $username = $_POST['username'];
        $password = $_POST['password'];
        UpdateProfileEkdot($username, $password);
        break;
    default:
        // unknown / missing action
    }


    function UpdateProfileEkdot($username, $password) {

        $conn = OpenCon();

        if( isset($_COOKIE['user'])) {

            $user = new User(0);
            $user  = unserialize($_COOKIE['user']);
            $userId = $user->getUserId();
            if($user->getUsername() != $username ) {

                setcookie('user', serialize($user), time() - 360000 );
                $user->setUsername($username);
                setcookie('user', serialize($user), time() + 360000 );
            }
            if($password == '' ) {

                $updateQuery = "UPDATE `User` SET `username` = '$username' WHERE `User`.`userId` = '$userId' ";
                    
                
                if (mysqli_query($conn, $updateQuery)) {
                    CloseCon($conn);
                    $val = 1;
                    echo $val;
                    return $val;
                } else {
                    $val = 0;
                    
                    echo "Error updating record: " . mysqli_error($conn);
                    CloseCon($conn);
                    echo $val;
                    return $val;
                }
                
            } else {
                    
                $updateQuery = "UPDATE `User` SET `username` = '$username', `password` = '$password' WHERE `User`.`userId` = '$userId' ";
                
                if (mysqli_query($conn, $updateQuery)) {
                    CloseCon($conn);
                    $val = 1;
                    echo $val;
                    return $val;
                } else {
                    $val = 0;
                    
                    echo "Error updating record: " . mysqli_error($conn);
                    CloseCon($conn);
                    echo $val;
                    return $val;
                }
            }

            
        } else {

            debug_to_console("User not connected");
        }

        CloseCon($conn);


    }
?>