<?php

    //$action = '';
    include("login.php");
    //debug_to_console("aaaaaaaaaaa");
    switch($_POST['action']) {
    case 'SubmitBook':
        $title = $_POST['title'];
        $authors = $_POST['authors'];
        $ISBN = $_POST['ISBN'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];
        $keywords = $_POST['keywords'];
        $weight = $_POST['weight'];
        $dimensions = $_POST['dimensions'];
        $pages = $_POST['pages'];
        $price = $_POST['price'];
        
        SubmitBook($title, $authors, $ISBN, $publisher, $year, $keywords, $weight, $dimensions, $pages, $price);
        break;
    default:
        // unknown / missing action
    }

    function SubmitBook($title, $authors, $ISBN, $publisher, $year, $keywords, $weight, $dimensions, $pages, $price){
        
        include("user.class.php");
        include("book.class.php");

        if( isset($_COOKIE['user']) ) {

            $user = new User(0);
            $user  = unserialize($_COOKIE['user']);
            $userId = $user->getUserId();
            $conn = OpenCon();

            $bookQuery = "INSERT INTO User (authors, dimensions, ISBN, pages, price, publisher, publishYear, title, User_userId, weight) VALUES ('$authors', '$dimensions', '$ISBN', '$pages', '$price', '$publisher', '$year', '$title', '$userId', '$weight')";

            if(mysqli_query($conn, $bookQuery)){  //Record added successfully
                $val = 1;
                echo $val;
                return $val;
            } else{
                $val = -1;
                debug_to_console("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
                return $val;
            }
        
        
        CloseCon($conn);
        //debug_to_console($optionsString);

        } else {

            
            $val = 0;      //User not connected
            echo $val;
            return $val;
        }

        
        
    }

?>