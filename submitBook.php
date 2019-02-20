<head>
  <title>Εύδοξος - Καταχώρηση Συγγράμματος</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">

  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/submitBook.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/totop.js"></script>
  <script src="js/submitBook.js"></script>
  


  <!-- <script src="js/homepage.js"></script> -->

</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <div class="container-fluid">
  <div class="row topPart">
      <div class="col-md-12">
        <div class="row topTopPart">
          <div class="col-xl-1 col-lg-2">
            <a class="logoDiv" href="http://localhost/sdi1500048_sdi1500116/"><img class="logo" src="images/logo.png" alt="Logo"><p class="logoText">Εύδοξος</p></a>
          </div>
          <div class="col-xl-8 d-lg-none d-xl-block">
            <div class="row">
              <div class="col">
                <p class="tagline">Ιστοχώρος ηλεκτρονικής διαχείρισης πανεπιστημιακών βιβλίων</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
              </div>
            </div>
          </div>
          <div class="d-xl-none d-lg-block col-lg-4">
          </div>
          <div class="col-xl-1 col-lg-2">
            <a href="#" onclick="logout()" class="iconText" ><i class="fas fa-sign-in-alt topIcons"></i>
            <!-- <p class="loginText">Είσοδος/Εγγραφή</p> -->
            <?php
              
              if (isset($_COOKIE['user'])) {

                echo '<p class="loginText"> Έξοδος </p>';
              }
              else {
                echo '<p class="loginText">Είσοδος/Εγγραφή</p>';
              }
            ?>
          </a>
          </div>
          <div class="col-xl-1 col-lg-2">
            <a class="iconText" href="#" onclick="profileGo('prof')"><i style="margin-left: 29%;" class="fas fa-user topIcons"></i>
            <!-- <p class="loginText">Προφίλ</p> -->
            <?php
              
              include("classes/user.class.php");
              
              if (isset($_COOKIE['user'])) {

                $user = new User(0);
                $user  = unserialize($_COOKIE['user']);
                echo '<p class="loginText">'. $user->getUsername() . ' </p>';
              }
              else {
                echo '<p class="loginText">Προφίλ</p>';
              }
            ?>
            </a>
          </div>
          <div class="col-xl-1 col-lg-2">
            <a href="#"><img class="flag rounded" src="images/greek.png" alt="Greek flag"></a>
            <a href="#"><img class="flag rounded" src="images/english.png" alt="Greek flag"></a>
          </div>
        </div>
        <div class="row navBarRow">
          <div class="col-12">
            <nav class="navbar rounded navbar-expand-xl navbar-light bg-light">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color: black;" class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-xl-0">
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/sdi1500048_sdi1500116/">Αρχική</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Φοιτητής
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/getbooks.php">Δήλωση Συγγραμμάτων</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/searchbooks.php">Αναζήτηση Συγγραμμάτων</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" onclick="profileGo('curr')">Τρέχουσα Δήλωση</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/help.php?who=stud">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Εκδότης
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/submitBook.php">Καταχώρηση Συγγράμματος</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Διαχείρηση Συγγραμμάτων</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/help.php?who=pub">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Γραμματεία
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Εισαγωγή Π.Σ.</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Επεξεργασία Π.Σ.</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Σημεια Διανομής
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Επικύρωση Παραλαβής</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Επεξεργασία Πληροφοριών</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Βοήθεια</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/sdi1500048_sdi1500116/searchbooks.php">Αναζήτηση Συγγραμμάτων</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Επικοινωνία</a>
                  </li>
                </ul>
                <form action="#" method="post" class="form-inline my-2 my-lg-0">
                  <input type="search" name="search" id="search" class="form-control mr-sm-2" placeholder="Τίτλος, πληροφορίες..." aria-label="Search">
                  <button class="btn btn-dark" type="submit">Αναζήτηση</button>
                </form>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="row breadcrumb">
      <div class="col-md-12">
        <ul class="breadcrumbT">
          <li><a href="http://localhost/sdi1500048_sdi1500116/">Αρχική</a></li>
          <li><a href="#">Καταχώρηση Συγγράμματος</a></li>
        </ul>
      </div>
    </div>


    <div style="min-height: -23px;" class="row">
        <div class="col-1"></div>
        <div class="col-4">
            
        	<p id="elementsTitle">Στοιχεία Συγγράμματος</p>

            <!-- <form id="elementsForm" data-toggle="validator" role="form" > -->
            
				<?php
				
					include("classes/book.class.php");
          include("login.php");
          
					if (isset($_COOKIE['book'])) {
						$book = new Book();
            $book  = unserialize($_COOKIE['book']);
            debug_to_console($book->getYear());

						echo '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control"  placeholder="Τίτλος" name="title" id="title"  oninput="typeTitle(this.value)" value="' .  htmlspecialchars($book->getTitle()) .'" autocomplete="off">' 
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Συγγραφείς" name="authors" id="authors" oninput="typeAuthors(this.value)" value="' .  htmlspecialchars($book->getAuthors()) .'" autocomplete="off">'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="ISBN" name="isbn" id="ISBN" oninput="typeISBN(this.value)" value="' .  htmlspecialchars($book->getISBN()) .'" autocomplete="off">'
						. '<p id="ISBNError">Το ISBN δεν είναι συμβατό με μία απο τις 2 προτεινόμενες μορφές!</p>'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Εκδόσεις" id="publisher" oninput="typePublisher(this.value)" value="' .  htmlspecialchars($book->getPublisher()) .'" autocomplete="off">'
						. '<select style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" onchange="chooseYear(this.value)" name="selYear" id="selYear" class="custom-select mb-3"  >'
						. '<option id="defYear"  value="0" >Επίλεξε Έτος Τρέχουσας Έκδοσης</option>';
						for($i = 1997; $i < 2020; $i++ ) {
              if($i == $book->getYear()) {
                debug_to_console("truee");
                echo '<option id="defYear" selected onchange="chooseYear(this.value)" value="' . $i . '">' 
                . $i 
                . '</option>';
              }
              else {
                echo '<option id="defYear" onchange="chooseYear(this.value)" value="' . $i . '">' 
                . $i 
                . '</option>'; 
              }	
            }
            echo '</select>';
            echo '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Βάρος (Kg)" name="weight" id="weight" oninput="typeWeight(this.value)" value="';
            if($book->getWeight() != 0) {
              //debug_to_console("aaaa");
              echo $book->getWeight();
            }
             echo '" autocomplete="off">'
						. '<p id="weightError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>'
            . '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Διαστάσεις (cm)" name="dimensions" id="dims" oninput="typeDimensions(this.value)" value="';
             if($book->getDimensions() != 0) {
               echo $book->getDimensions();
             } 
            echo '" autocomplete="off">'
						. '<p id="dimError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>'
            . '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Σελίδες" name="pages" id="pages" oninput="typePages(this.value)" value="';
            if($book->getPages() != 0){
              echo $book->getPages();
            }
            echo '" autocomplete="off">'
						. '<p id="pagesError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>'
            . '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Τιμή (€)" name="price" id="price" oninput="typePrice(this.value)" value="';
            if($book->getPrice() != 0) {
              echo $book->getPrice();
            } 
             echo '" autocomplete="off">'
						. '<p id="priceError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>';

					}
					else {
            debug_to_console("notset");
						echo '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control"  placeholder="Τίτλος" name="title" id="title" oninput="typeTitle(this.value)">'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Συγγραφείς" name="authors" id="authors" oninput="typeAuthors(this.value)">'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="ISBN" name="isbn" id="ISBN" oninput="typeISBN(this.value)">'
						. '<p id="ISBNError">Το ISBN δεν είναι συμβατό με ένα από τα δύο προτεινόμενα format!</p>'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Εκδόσεις" id="publisher" oninput="typePublisher(this.value)">'
						. '<select style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" onchange="chooseYear(this.value)" name="selYear" id="selYear" class="custom-select mb-3">'
						. '<option id="defYear"  value="0" selected>Επίλεξε Έτος Τρέχουσας Έκδοσης</option>';
							
												
						for($i = 1997; $i < 2020; $i++ ) {
							echo '<option id="defYear" onchange="chooseYear(this.value)" value="' . $i . '">' 
							. $i 
							. '</option>'; 
							
						}
						echo '</select>'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Βάρος (Kg)" name="weight" id="weight" oninput="typeWeight(this.value)">'
						. '<p id="weightError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Διαστάσεις (cm)" name="dimensions" id="dims" oninput="typeDimensions(this.value)">'
						. '<p id="dimError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Σελίδες" name="pages" id="pages" oninput="typePages(this.value)">'
						. '<p id="pagesError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>'
						. '<input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Τιμή (€)" name="price" id="price" oninput="typePrice(this.value)">'
						. '<p id="priceError">Μη αποδεκτή τιμή! Πληκτρολόγησε έναν αριθμό!</p>';
					}
				?>
            	
                
            <!-- </form> -->
            

        </div>
        <div class="col-1"  style="border-right: 1px solid grey;margin-left:-130px; margin-right:70px">
            
            
            <div class="row">
                <i id="aster0" class="fa fa-asterisk"></i>
            </div>
            <div class="row">
                <i id="aster1" class="fa fa-asterisk"></i>
            </div>
            <div class="row">
                <span id="aster2" class="fa fa-asterisk"></span>
                <button id="isbnHelp" type="button" class="btn btn-default btn-circle btn-lg" data-toggle="tooltip" data-placement="right" title="π.χ. 90-12345-09-7 ή 978-960-530-165-1"><i class="fa fa-info-circle"></i></button>
            </div>
            <div class="row">
                <i id="aster3" class="fa fa-asterisk"></i>
            </div>
            <div class="row">
                <i id="aster4" class="fa fa-asterisk"></i>
            </div>
            <div class="row">
              <button id="helpBtn0" type="button" class="btn btn-default btn-circle btn-lg" data-toggle="tooltip" data-placement="right" title="π.χ. 0.25 ή 14.0 "><i class="fa fa-info-circle"></i></button>
            </div>
            <div class="row">
              <button id="helpBtn1" type="button" class="btn btn-default btn-circle btn-lg" data-toggle="tooltip" data-placement="right" title="π.χ. 12x43 ή 12.0x6.25"><i class="fa fa-info-circle"></i></button>
            </div>
            <div class="row">
              <button id="helpBtn2" type="button" class="btn btn-default btn-circle btn-lg" data-toggle="tooltip" data-placement="right" title="π.χ. 20.25 ή 17.0  "><i class="fa fa-info-circle"></i></button>
            </div>
            
        </div>
        <div class="col-4">


        	<p id="decriptionTitle">Περιγραφή Συγγράμματος</p>

            <br><br>
            <form id="descForm" data-toggle="validator" role="form">
                <ul>
                    <li>   
                        <form >
                            <div class="form-group">
                                <label for="pdfPreview">Απόσπασμα Συγγράμματος (Αρχείο pdf):</label>
								<?php
									
				
									if (isset($_COOKIE['book'])) {
				
										$book = new Book(0);
										$book  = unserialize($_COOKIE['book']);
										if( $book->getPreview() != 0) {
											
											echo '<input type="file" class="form-control-file" id="pdfPreview" oninput="choosePreview(this.value)">';
									
										}else {
                      //echo '<input type="file" class="form-control-file" id="pdfPreview" oninput="choosePreview(this.value)" value="' .  htmlspecialchars($book->getPreview()) .'">';
                      echo '<input type="file" class="form-control-file" id="pdfPreview" oninput="choosePreview(this.value)">';
										}
									} else {

										echo '<input type="file" class="form-control-file" id="pdfPreview" oninput="choosePreview(this.value)">';
									}
								?>
                                
                            </div>
                        </form>
                    </li>
                    <br><br><br>
                    <li>
                        <form>
                            <div class="form-group">
                                <label for="pdfIndex">Περιεχόμενα Συγγράμματος (Αρχείο pdf):</label>
                                <?php
									
				
									if (isset($_COOKIE['book'])) {
				
										$book = new Book(0);
										$book  = unserialize($_COOKIE['book']);
										if( $book->getIndex() != 0) {
											
											echo '<input type="file" class="form-control-file" id="pdfIndex" oninput="chooseIndex(this.value)" value="' .  htmlspecialchars($book->getIndex()) .'" >';
									
										}else {
											echo '<input type="file" class="form-control-file" id="pdfIndex" oninput="chooseIndex(this.value)">';
										}
									} else {

										echo '<input type="file" class="form-control-file" id="pdfIndex" oninput="chooseIndex(this.value)">';
									}
								?>
                            </div>
                        </form>
                    </li>
                    <br><br><br>
                    <li>
                        <form>
                            <div class="form-group">
                                <label for="pdfCover">Εξώφυλλο Συγγράμματος (Αρχείο εικόνας):</label>
                                <?php
									
				
									if (isset($_COOKIE['book'])) {
				
										$book = new Book(0);
										$book  = unserialize($_COOKIE['book']);
										if( $book->getCover() != 0) {
											
											echo '<input type="file" class="form-control-file" id="pdfCover" oninput="chooseCover(this.value)" value="' .  htmlspecialchars($book->getCover()) .'">';
									
										}else {
											echo '<input type="file" class="form-control-file" id="pdfCover" oninput="chooseCover(this.value)">';
										}
									} else {

										echo '<input type="file" class="form-control-file" id="pdfCover" oninput="chooseCover(this.value)">';
									}
								?>
                            </div>
                        </form>
                    </li>
                </ul>

                <?php
                  if(isset($_COOKIE['book'])) {
                    $book = new Book(0);
										$book  = unserialize($_COOKIE['book']);
										if( $book->getKeywords() != "") {
                      debug_to_console("AAAA");
                      echo '<input style="margin-top: 17%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:100%; margin-left:25px; " type="text" class="form-control" 
                      placeholder="Λέξεις Κλειδιά (Χωρισμένες με κόμμα)" name="keywords" id="keywords" oninput="typeKeywords(this.value)" value="' . $book->getKeywords() . '">';
                    }
                    else {
                      echo '<input style="margin-top: 17%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:100%; margin-left:25px; " type="text" class="form-control" placeholder="Λέξεις Κλειδιά (Χωρισμένες με κόμμα)" name="keywords" id="keywords" oninput="typeKeywords(this.value)">';
                    }

                  }
                  else {
                    echo '<input style="margin-top: 17%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:100%; margin-left:25px; " type="text" class="form-control" placeholder="Λέξεις Κλειδιά (Χωρισμένες με κόμμα)" name="keywords" id="keywords" oninput="typeKeywords(this.value)">';
                  }
                ?>
                <!-- <input style="margin-top: 17%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:100%; margin-left:25px; " type="text" class="form-control" placeholder="Λέξεις Κλειδιά(Χωρισμένες με κόμμα)" name="keywords" id="keywords" oninput="typeKeywords(this.value)"> -->
                <p id="keywordsError">Οι λέξεις πρέπει να είναι χωρισμένες με κόμμα</p>

            </form>
            <button id="submitButton"  onclick="submitBk()" type="submit" class="btn btn-success" disabled>Καταχώρηση</button>
            <p id="userError">Μη επιτρεπτή ενέργεια! Μόνο οι Εκδότες μπορούν να καταχωρήσουν σύγγραμμα !</p>
            <p id="submitSuccess">Η καταχώρηση του συγγράμματος έγινε με επιτυχία</p>
            <i id="aster6" class="fa fa-asterisk"></i><span >Υποχρεωτικό πεδίο<span>
        </div>

        <div class="col-1">
              
            <div class="row">
                <i id="aster5" class="fa fa-asterisk"></i>
                <button id="helpBtn3" type="button" class="btn btn-default btn-circle btn-lg" data-toggle="tooltip" data-placement="right" title="π.χ. Άνθρωπος, Μηχανή  "><i class="fa fa-info-circle"></i></button>
            </div>

        </div>


    </div>
    <div class="row" style="min-height:50px"> </div>
  </div>


  <footer class="section footer-classic context-dark bg-image" style="background: #E7E7E7;">
        <div class="container">
          <div style="padding-top:5%; padding-bottom: 3%;" class="row row-30">
            <div style="border-right: 1px solid grey;" class="col-md-3 col-xl-4">
              <div class="pr-xl-3">
                <p class="footerHeader">Εύδοξος</p>
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Stavroula Iatropoulou, Mike Xydas</span><span>. </span><p>All Rights Reserved.</p></p>
              </div>
            </div>
            <div style="border-right: 1px solid grey; margin-left: 6%;" class="col-md-3">
              <h5>Επικοινωνία</h5>
              <dl class="contact-list">
                <dt>email επικοινωνίας:</dt>
                <dd><a href="mailto:#">help@eudoxos.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>Τηλέφωνο:</dt>
                <dd><a href="tel:#">210-6711223</a>
                </dd>
              </dl>
            </div>
            <div style="margin-left: 5%;" class="col-md-4 col-xl-3">
              <h5>Σύνδεσμοι</h5>
              <ul class="nav-list">
                <li><a href="#">Φοιτητής</a></li>
                <li><a href="#">Εκδότης</a></li>
                <li><a href="#">Γραμματεία</a></li>
                <li><a href="#">Σημεία Διανομής</a></li>
                <li><a href="#">Πληροφορίες</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</body>