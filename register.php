<?php

    //$action = '';
    include("login.php");
    //debug_to_console("aaaaaaaaaaa");
    switch($_POST['action']) {
    case 'CheckEmail':
        $emailReg = $_POST['email'];
        CheckEmail($emailReg);
        break;
    case 'Register':
        
        $emailReg = $_POST['email'];
        $user_name = $_POST['username'];
        $pass = $_POST['password'];
        $cat = $_POST['category'];
        $cat_ID = $_POST['categoryId'];
        Register($user_name, $emailReg, $pass, $cat, $cat_ID);
        break;
    default:
        // unknown / missing action
    }

    function CheckEmail($email){
        //include("login.php");
        $conn = OpenCon();
        //debug_to_console("reach");
        $emailQuery = "SELECT email FROM `User` WHERE email = '$email'";

        $emailResults = mysqli_query($conn, $emailQuery);

        if (mysqli_num_rows($emailResults) > 0) { //email already exists
            $val = 1;
            echo $val;
            return $val;
        } else {
            $val = 0;
            echo $val;
            return $val;
        }
        
        CloseCon($conn);
        //debug_to_console($optionsString);
        
    }
    
    function Register($username, $email, $password, $category, $categoryId) {
        $conn = OpenCon();
        //debug_to_console("reach");
        $emailQuery = "INSERT INTO User (username, email, password, userCategory, categoryId) VALUES ('$username', '$email', '$password', '$category', '$categoryId')";

        if(mysqli_query($conn, $emailQuery)){  //Records added successfully
            $val = 1;
            echo $val;
            return $val;
        } else{
            debug_to_console("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
        }
        
        // Close connection
       CloseCon($conn);

        
    }

?>