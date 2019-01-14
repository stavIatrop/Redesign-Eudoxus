<?php

    include("login.php");
    //debug_to_console("aaaaaaaaaaa");
    switch($_POST['action']) {
    case 'SearchBook':
        $searchTerm = $_POST['searchTerm'];
        SearchBook($searchTerm);
        break;
    default:
        break;

    } 

    function  SearchBook($searchTerm) {
        $conn = OpenCon();
        $sqlQuery = "SELECT `bookId`, `title`, `authors`, `ISBN`, `publishYear`, `pages`, `cover`, `publisher` FROM `Book_has_Keyword`, `Book`, `Keyword` 
                     WHERE (Book.bookId = Book_has_Keyword.Book_bookId and `Book_has_Keyword`.`Keyword_keywordId` = `Keyword`.`keywordId` and `Keyword`.`word` = '$searchTerm')
                     UNION
                     SELECT `bookId`, `title`, `authors`, `ISBN`, `publishYear`, `pages`, `cover`, `publisher` FROM `Book`
                     WHERE Book.title = '$searchTerm' or Book.authors = '$searchTerm' or Book.ISBN = '$searchTerm'";

        $searchResults = mysqli_query($conn, $sqlQuery);
        $searchString = "";
        if (mysqli_num_rows($searchResults) > 0) {
            while($row = mysqli_fetch_assoc($searchResults)) {
                $searchString .= '<li><div class="row bookRow">
                                    <div class="col-md-2">
                                    <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                    <p style="font-weight: bold; font-size: 120%; margin-top: 2%; text-align: center;">' . htmlspecialchars($row['title']) . '</p>
                                    <p class="text-center">Συγγραφέας: ' . htmlspecialchars($row['authors']) . '</p>
                                    <p class="text-center">Σελίδες: ' . htmlspecialchars($row['pages']) . '</p>
                                    </div>
                                    <div class="col-lg-3 d-md-none d-lg-block">
                                    <p style= "margin-top: 2%;">Εκδόσεις: ' . htmlspecialchars($row['publisher']) . '</p>
                                    <p>Έτος Έκδοσης: ' . htmlspecialchars($row['publishYear']) . '</p>
                                    <p>ISBN: ' . htmlspecialchars($row['ISBN']) . '</p>
                                    </div>
                                    <div class="col-md-3">
                                    <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Περισσότερα </button>
                                    </div>
                                </div></li>'; 
            }
            
        }

        echo $searchString;
        return $searchString;


    }
?>