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
        $preview = $_POST['preview'];
        $index = $_POST['index'];
        $cover = $_POST['cover'];
        
        SubmitBook($title, $authors, $ISBN, $publisher, $year, $keywords, $weight, $dimensions, $pages, $price, $preview, $index, $cover);
        break;
    default:
        // unknown / missing action
    }

    function SubmitBook($title, $authors, $ISBN, $publisher, $year, $keywords, $weight, $dimensions, $pages, $price, $preview, $index, $cover){
        
        include("user.class.php");
        include("book.class.php");

        if( isset($_COOKIE['user']) ) {

            $user = new User(0);
            $user  = unserialize($_COOKIE['user']);
            $userCat = $user->getCategory();

            if( $userCat == 1) {
                
                $val = -2;
                echo $val;
                return $val;
            }

            
            $userId = $user->getUserId();
            $conn = OpenCon();

            $bookQuery = "INSERT INTO `Book` ( `title`, `authors`, `ISBN`, `publisher`, `publishYear`, `weight`, `pages`, `dimensions`, `price`, `pdfPreview`, `pdfIndex`, `User_userId`, `cover`)
             VALUES ('$title', '$authors', '$ISBN','$publisher', '$year', '$weight', '$pages', '$dimensions', '$price', '$preview', '$index', '$userId', '$cover')";

            $keywords = preg_replace('/s+/', '', $keywords);
            $keywords = str_replace(" ", "", $keywords);
            $keywordsArray = explode(",", $keywords);

            for($i = 0; $i < count($keywordsArray); $i++){

                if($keywordsArray[$i] == null) {
                    continue;
                }
                $word = $keywordsArray[$i];
                $keywordQuery = "INSERT INTO `Keyword` (`word`) VALUES('$word')";
                if(!mysqli_query($conn, $keywordQuery)) {
                    $val = -1;
                    debug_to_console("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
                    return $val;
                }
            }

            if(mysqli_query($conn, $bookQuery)){  //Record added successfully
                if( isset($_COOKIE['book'])) {
                    setcookie('book', serialize($book), time() - 360000 );
                }
                
                $val = 1;
                echo $val;
                return $val;
            } else{
                $val = -1;
                debug_to_console("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
                return $val;
            }
        
        
            CloseCon($conn);

        } else {

            $book = new Book();
            $book->setTitle($title);
            $book->setAuthors($authors);
            $book->setISBN($ISBN);
            $book->setPublisher($publisher);
            $book->setYear($year);
            $book->setKeywords($keywords);
            $book->setWeight($weight);
            $book->setDimensions($dimensions);
            $book->setPages($pages);
            $book->setPrice($price);
            $book->setPreview($preview);
            $book->setIndex($index);
            $book->setCover($cover);

            setcookie('book', serialize($book), time() + 360000 );
            $val = 0;      //User not connected
            echo $val;
            return $val;
        }

        
        
    }

?>