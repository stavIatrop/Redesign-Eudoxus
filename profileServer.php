<?php

    include("login.php");
    include('user.class.php');
    switch($_POST['action']) {
    case 'ShowDeps':
        $uniName = $_POST['uniName'];
        ShowDeps($uniName);
        break;
    case 'UpdateProfile':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $uniName = $_POST['uniName'];
        $uniDepart = $_POST['uniDepart'];
        UpdateProfile($username, $password, $uniName, $uniDepart);
        break;
    default:
        // unknown / missing action
    }


    function ShowDeps($uniName) {
        
        $conn = OpenCon();
        
        $depsQuery = "SELECT DISTINCT(uniDepartment) FROM `Course` WHERE uniName = '$uniName'";

        $depsResults = mysqli_query($conn, $depsQuery);

        $responseString = "";
        if (mysqli_num_rows($depsResults) > 0) {
            while($row = mysqli_fetch_assoc($depsResults)) {
                $responseString .= '<option onclick="changeDep(this.value)" value="' . htmlspecialchars($row['uniDepartment']) . '">' 
                . htmlspecialchars($row['uniDepartment']) 
                . '</option>'; 
                
            }
            
        }
        else {
            debug_to_console("No Departments");
        }
        CloseCon($conn);

        echo $responseString;
        return $responseString;
    }

    function UpdateProfile($username, $password,  $uniName, $uniDepart) {

        

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

                if($uniDepart === 0 && $uniName === 0) {
                    
                    $updateQuery = "UPDATE `User` SET `username` = '$username', `uniName` = NULL, `uniDepartment` = NULL WHERE `User`.`userId` = '$userId' ";
                
                }else  if( $uniDepart === 0) {

                    $updateQuery = "UPDATE `User` SET `username` = '$username', `uniName` = '$uniName', `uniDepartment` = NULL WHERE `User`.`userId` = '$userId' ";
                
                } else {

                    $updateQuery = "UPDATE `User` SET `username` = '$username', `uniName` = '$uniName', `uniDepartment` = '$uniDepart' WHERE `User`.`userId` = '$userId' ";

                }
                    
                    
                
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

                if($uniDepart === 0 && $uniName === 0) {
                    
                    $updateQuery = "UPDATE `User` SET `username` = '$username', `password` = '$password', `uniName` = NULL, `uniDepartment` = NULL WHERE `User`.`userId` = '$userId' ";
                
                }else  if( $uniDepart === 0) {

                    $updateQuery = "UPDATE `User` SET `username` = '$username', `password` = '$password', `uniName` = '$uniName', `uniDepartment` = NULL WHERE `User`.`userId` = '$userId' ";
                
                } else {

                    $updateQuery = "UPDATE `User` SET `username` = '$username', `password` = '$password', `uniName` = '$uniName', `uniDepartment` = '$uniDepart' WHERE `User`.`userId` = '$userId' ";
            
                }


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