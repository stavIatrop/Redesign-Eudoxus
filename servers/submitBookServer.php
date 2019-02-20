<?php

    //$action = '';
    include("../login.php");
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
    case 'BookCookie':
        isBookCookieSet();
        break;
    default:
        // unknown / missing action
    }

    function SubmitBook($title, $authors, $ISBN, $publisher, $year, $keywords, $weight, $dimensions, $pages, $price, $preview, $index, $cover){
        
        include("../classes/user.class.php");
        include("../classes/book.class.php");

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
             
            $keywords = str_replace(" ", "", $keywords);
            $keywordsArray = explode(",", $keywords);

            if(mysqli_query($conn, $bookQuery)){  //Record added successfully
                if( isset($_COOKIE['book'])) {
                    setcookie('book', "Expired", time() - 3600000, "/sdi1500048_sdi1500116");
                }
                $last_book = $conn->insert_id;
            } else{
                $val = -1;
                debug_to_console("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
                return $val;
            }

            for($i = 0; $i < count($keywordsArray); $i++){

                if($keywordsArray[$i] == null) {
                    continue;
                }

                $word = $keywordsArray[$i];
                $selectKeywordQuery = "SELECT keywordId FROM `Keyword` WHERE word='$word'";
                $keywordResults = mysqli_query($conn, $selectKeywordQuery);

                if (mysqli_num_rows($keywordResults) > 0) {
                    while($row = mysqli_fetch_assoc($keywordResults)) {
                        $last_keyword = $row['keywordId'];
                    }
                }
                else {
                    $keywordQuery = "INSERT INTO `Keyword` (`word`) VALUES('$word')";
                
                    if(!mysqli_query($conn, $keywordQuery)) {
                        $val = -1;
                        debug_to_console("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
                        return $val;
                    }
                    $last_keyword = $conn->insert_id;
                }

                

                $keywordBookQuery = "INSERT INTO `Book_has_Keyword` (`Book_bookId`, `Keyword_keywordId`) VALUES ('$last_book', '$last_keyword');";
                if(!mysqli_query($conn, $keywordBookQuery)) {
                    $val = -1;
                    debug_to_console("ERROR: Could not able to execute $keywordBookQuery. " . mysqli_error($conn));
                    return $val;
                }
            }

            $retVal = 1;
            echo $retVal;
            return $retVal;
            
        
        
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

            setcookie('book', serialize($book), time() + 360000, "/sdi1500048_sdi1500116");
            $val = 0;      //User not connected
            echo $val;
            return $val;
        }

        
        
    }

    function isBookCookieSet() {
        if( isset($_COOKIE['book'])) {
            $retVal = 1;
            echo $retVal;
            return $retVal;
        }
        else {
            $retVal = 0;
            echo $retVal;
            return $retVal;
        }
    }

?>