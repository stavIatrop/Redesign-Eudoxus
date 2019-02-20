<?php

    include("login.php");
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
        $conn = OpenCon();
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
        
    }
    
    function Register($username, $email, $password, $category, $categoryId) {

        include("classes/user.class.php");
        $conn = OpenCon();
        
        $emailQuery = "INSERT INTO User (username, email, password, userCategory, categoryId) VALUES ('$username', '$email', '$password', '$category', '$categoryId')";

        if(mysqli_query($conn, $emailQuery)){  //Record added successfully
            $last_id = $conn->insert_id;
            $user = new User(htmlspecialchars($last_id));
            $user->setUsername(htmlspecialchars($username));
            $user->setEmail(htmlspecialchars($email));
            $user->setPassword(htmlspecialchars($password));
            $user->setCategory(htmlspecialchars($category));
            $user->setCategoryId(htmlspecialchars($categoryId));
            $user->setUniName(htmlspecialchars(null));
            $user->setUniDepartment(htmlspecialchars(null));
            setcookie('user', serialize($user), time() + 360000, "/sdi1500048_sdi1500116" );

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