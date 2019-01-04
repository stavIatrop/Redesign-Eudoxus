<head>
  <title>Εύδοξος - Δήλωση</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">

	<link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/getbooks.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/getbook.js"></script>
  <script src="js/totop.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- <script src="js/homepage.js"></script> -->

</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <div class="container-fluid">
    <div class="row topPart">
      <div class="col-md-12">
        <div class="row topTopPart">
          <div class="col-xl-1 col-lg-2">
            <a class="logoDiv" href="homepageUrl"><img class="logo" src="images/logo.png" alt="Logo"><p class="logoText">Εύδοξος</p></a>
          </div>
          <div class="col-xl-8 d-lg-none d-xl-block">
            <div class="row">
              <div class="col">
                <p class="tagline">Σύντομη πρόταση περιγραφής του ιστοχώρου</p>
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
            <a href="Login" class="iconText" ><i class="fas fa-sign-in-alt topIcons"></i>
            <!-- <p class="loginText">Είσοδος / Εγγραφή</p> -->
            <?php
              
              if (isset($_COOKIE['username'])) {

                $username  = $_COOKIE['username'];
                echo '<p class="loginText"> Έξοδος </p>';
              }
              else {
                echo '<p class="loginText">Είσοδος/Εγγραφή</p>';
              }
            ?>
            </a>
          </div>
          <div class="col-xl-1 col-lg-2">
            <a class="iconText" href="Login"><i style="margin-left: 29%;" class="fas fa-user topIcons"></i>
            <!-- <p class="loginText">Προφίλ</p> -->
            <?php
              
              if (isset($_COOKIE['username'])) {

                $username  = $_COOKIE['username'];
                echo '<p class="loginText">'. $username . ' </p>';
              }
              else {
                echo '<p class="loginText">Προφίλ</p>';
              }
            ?>
            </a>
          </div>
          <div class="col-xl-1 col-lg-2">
            <a href="greekVersion"><img class="flag rounded" src="images/greek.png" alt="Greek flag"></a>
            <a href="englishVersion"><img class="flag rounded" src="images/english.png" alt="Greek flag"></a>
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
                    <a class="nav-link" href="#">Αρχική</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Φοιτητής
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Δήλωση Συγγραμμάτων</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Αναζήτηση Συγγραμμάτων</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Τρέχουσα Δήλωση</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Εκδότης
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Καταχώρηση Συγγράμματος</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Διαχείρηση Συγγραμμάτων</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Γραμματεία
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Σημεια Διανομής
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="#">Επικοινωνία</a>
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
          <li><a href="#">Αρχική</a></li>
          <li><a href="#">Δήλωση Συγγραμμάτων</a></li>
        </ul>
      </div>
    </div>
    <div class="getBooksContainer row">
      <div class="col-md-1">
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-12">
            <p class="getBooksTitle">Δήλωση Συγγραμμάτων - Προθεσμία Δήλωσης 17/11/2018</p>
          </div>
        </div>
        <div style="" class="row dropdownRow">
          <div class="col-xl-6">
            <span class="dropdownTitles" style="vertical-align: middle;">Πανεπιστήμιο:</span>
            <select name="selUni" id="selUni" class="uniSelect custom-select mb-3">
              <option id="defUni" onclick="chooseUni(this.value)" value="0" selected>Επίλεξε Πανεπιστήμιο</option>
              <!-- <option onclick="chooseUni(this.value)" value="1">Εθνικό και Καποδιστριακό Πανεπιστήμιο Αθηνών - ΕΚΠΑ</option>
              <option onclick="chooseUni(this.value)" value="2">Εθνικό Μετσόβιο Πολυτεχνείο -ΕΜΠ</option>
              <option onclick="chooseUni(this.value)" value="3">Πανεπιστήμιο Πειραιώς</option> -->
              <?php
                include 'login.php';
                $conn = OpenCon();
                debug_to_console("Connected");
                $uniesQuery = "SELECT DISTINCT(uniName) FROM `Course`";
                $unies = $conn->query($uniesQuery);
                if ($unies->num_rows > 0) {
                  // output data of each row
                  while($row = $unies->fetch_assoc()) {
                      //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                      debug_to_console($row["uniName"]);
                      echo '<option onclick="chooseUni(this.value)" value="' . htmlspecialchars($row['uniName']) . '">' 
                      . htmlspecialchars($row['uniName']) 
                      . '</option>';  
                  }
                } 
                else {
                    echo "0 results";
                }
                CloseCon($conn);
              ?>
            </select>
          </div>
          <div class="col-xl-6">
            <span class="dropdownTitles" style="vertical-align: middle;">Τμήμα:</span>
            <select id="selDep" style="margin-left: 8%;" disabled class="uniSelect custom-select mb-3">
              <option id="defDep" onclick="chooseDep(this.value)" value="0" selected>Επίλεξε Τμήμα</option>
                <!-- <option onclick="chooseDep(this.value)" value="1">One</option>
                <option onclick="chooseDep(this.value)" value="2">Two</option>
                <option onclick="chooseDep(this.value)" value="3">Three</option> -->
              
            </select>
          </div>
        </div>
        <div style="visibility:hidden;" id="semCourseRow" class="row dropdownRow">
          <div class="col-xl-6">
            <span class="dropdownTitles" style="vertical-align: middle;">Εξάμηνο:</span>
            <select id="selSem" style="margin-left: 13%;" disabled class="uniSelect custom-select mb-3">
              <option id="defSem" onclick="chooseSem(this.value)" value="0" selected>Επίλεξε Εξάμηνο</option>
              <option onclick="chooseSem(this.value)" value="1">1ο Εξάμηνο - Χειμερινό</option>
              <option onclick="chooseSem(this.value)" value="2">2ο Εξάμηνο - Εαρινό</option>
              <option onclick="chooseSem(this.value)" value="3">3ο Εξάμηνο - Χειμερινό</option>
              <option onclick="chooseSem(this.value)" value="4">4ο Εξάμηνο - Εαρινό</option>
              <option onclick="chooseSem(this.value)" value="5">5ο Εξάμηνο - Χειμερινό</option>
              <option onclick="chooseSem(this.value)" value="6">6ο Εξάμηνο - Εαρινό</option>
              <option onclick="chooseSem(this.value)" value="7">7ο Εξάμηνο - Χειμερινό</option>
              <option onclick="chooseSem(this.value)" value="8">8ο Εξάμηνο - Εαρινό</option>
            </select>
          </div>
          <div class="col-xl-6">
            <span class="dropdownTitles" style="vertical-align: middle;">Μάθημα:</span>
            <select id="selCourse" disabled class="uniSelect custom-select mb-3">
              <option id="defCourse" onclick="chooseCourse(this.value)" value="0" selected>Επίλεξε Μάθημα</option>
              <option onclick="chooseCourse(this.value)" value="1">One</option>
              <option onclick="chooseCourse(this.value)" value="2">Two</option>
              <option onclick="chooseCourse(this.value)" value="3">Three</option>
            </select>
          </div>
        </div>
        <div id="showBooks" style="display: none;">
          <ul id="showBooksList" class="bookList">
            <!-- <li><div class="row bookRow">
              <div class="col-md-3">
                <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
              </div>
              <div class="col-md-6">
                <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                <p>Συγγραφέας: Όνομα Επίθετο</p>
                <p>Σελίδες: 156</p>
              </div>
              <div class="col-md-3">
                <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Προσθήκη</button>
              </div>
            </div></li>
            <li><div class="row bookRow">
              <div class="col-md-3">
                <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
              </div>
              <div class="col-md-6">
                <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                <p>Συγγραφέας: Όνομα Επίθετο</p>
                <p>Σελίδες: 156</p>
              </div>
              <div class="col-md-3">
                <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Προσθήκη</button>
              </div>
            </div></li>
            <li><div class="row bookRow">
              <div class="col-md-3">
                <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
              </div>
              <div class="col-md-6">
                <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                <p>Συγγραφέας: Όνομα Επίθετο</p>
                <p>Σελίδες: 156</p>
              </div>
              <div class="col-md-3">
                <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Προσθήκη</button>
              </div>
            </div></li>
            <li><div class="row bookRow" style="">
              <div class="col-md-3">
                <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
              </div>
              <div class="col-md-6">
                <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                <p>Συγγραφέας: Όνομα Επίθετο</p>
                <p>Σελίδες: 156</p>
              </div>
              <div class="col-md-3">
                <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Προσθήκη</button>
              </div>
            </div></li> -->
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row getBooksTitle">
          <div class="col-md-12" >
            <p class="mybooks">Η δήλωσή μου</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <ul id="statedBooksList" style="margin-top: 5%; min-height: 200px;" class="bookList">
              <?php
                if(!isset($_COOKIE['statement'])) {
                  echo '<p style=" font-size: 24px; text-align: center; margin-right: 10%; margin-top:10%;">Η δήλωση είναι κενή</p>';
                  //writeButton(1);
                }
                else {
                  $statements = json_decode($_COOKIE['statement'], false);
                  if(empty($statements)) {
                    echo '<p style=" font-size: 24px; text-align: center; margin-right: 10%; margin-top:10%;">Η δήλωση είναι κενή</p>';
                    //writeButton(1);
                  }
                  else {
                    $conn = OpenCon();
                    $stateString = "";
                    //writeButton(0);
                    foreach($statements as $whichState) {
                        //debug_to_console("aaaa " . $whichState->bookId);
                        $stateQuery = "SELECT Book.title, Course.courseName, Course.semester 
                                        FROM Book, Course 
                                        WHERE Book.bookId = '$whichState->bookId' and Course.courseId = '$whichState->courseId'";

                        $stateResults = mysqli_query($conn, $stateQuery);
                
                        if (mysqli_num_rows($stateResults) > 0) {
                            while($row = mysqli_fetch_assoc($stateResults)) {
                                $stateString .= '<li>
                                                <div style="padding-bottom: 7%; border-bottom: 2px solid grey;" class="row">
                                                <div class="col-lg-2 d-md-none d-lg-block">
                                                    <img class="mybookImage rounded" src="images/book.jpeg" alt="Book cover missing">
                                                </div>
                                                <div class="col-lg-1 d-md-none d-lg-block">
                                                </div>
                                                <div style="margin-top: 2%;" class="col-lg-6 col-md-9">
                                                    <p style="font-size: 110%;">'. htmlspecialchars($row['title']) .'</p>
                                                    <p>'. htmlspecialchars($row['courseName']) .'</p>
                                                    <p>'. htmlspecialchars($row['semester']) .'</p>
                                                </div>
                                                <div class="col-lg-3">
                                                    <button style="margin-top:60%;" class="btn btn-lg btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </div>
                                                </div>
                                            </li>'; 
                                //debug_to_console($row['uniDepartment']);
                            }
                            
                        }
                        else {
                            debug_to_console("NO COURSES");
                        }
                    }
                    CloseCon($conn);
                    //debug_to_console($stateString);
                    echo $stateString;
                  }
                }
              ?>

              <!-- <li>
                <div style="padding-bottom: 7%; border-bottom: 2px solid grey;" class="row">
                  <div class="col-lg-2 d-md-none d-lg-block">
                    <img class="mybookImage rounded" src="images/book.jpeg" alt="Book cover missing">
                  </div>
                  <div class="col-lg-1 d-md-none d-lg-block">
                  </div>
                  <div style="margin-top: 2%;" class="col-lg-6 col-md-9">
                    <p style="font-size: 110%;">Τίτλος Συγγράμματος</p>
                    <p>Μάθημα</p>
                    <p>Εξάμηνο</p>
                  </div>
                  <div class="col-lg-3">
                    <button style="margin-top:60%;" class='btn btn-lg btn-danger'>
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </div>
                </div>
              </li>
              <li>
                <div style="padding-bottom: 7%; margin-top:7%; border-bottom: 2px solid grey;" class="row">
                  <div class="col-md-2">
                    <img class="mybookImage rounded" src="images/book.jpeg" alt="Book cover missing">
                  </div>
                  <div class="col-md-1">
                  </div>
                  <div style="margin-top: 2%;" class="col-md-6">
                    <p style="font-size: 110%;">Τίτλος Συγγράμματος</p>
                    <p>Μάθημα Εξάμηνο</p>
                  </div>
                  <div class="col-md-3">
                  <button style="margin-top:30%;" class='btn btn-lg btn-danger'>
                    <i class="fas fa-trash-alt"></i>
                  </button>
                  </div>
                </div>
              </li>
              <li>
                <div style="padding-bottom: 7%; margin-top:7%; border-bottom: 2px solid grey;" class="row">
                  <div class="col-md-2">
                    <img class="mybookImage rounded" src="images/book.jpeg" alt="Book cover missing">
                  </div>
                  <div class="col-md-1">
                  </div>
                  <div style="margin-top: 2%;" class="col-md-6">
                    <p style="font-size: 110%;">Τίτλος Συγγράμματος</p>
                    <p>Μάθημα Εξάμηνο</p>
                  </div>
                  <div class="col-md-3">
                  <button style="margin-top:30%;" class='btn btn-lg btn-danger'>
                    <i class="fas fa-trash-alt"></i>
                  </button>
                  </div>
                </div>
              </li>
              <li>
                <div style="padding-bottom: 7%; margin-top:7%; border-bottom: 2px solid grey;" class="row">
                  <div class="col-md-2">
                    <img class="mybookImage rounded" src="images/book.jpeg" alt="Book cover missing">
                  </div>
                  <div class="col-md-1">
                  </div>
                  <div style="margin-top: 2%;" class="col-md-6">
                    <p style="font-size: 110%;">Τίτλος Συγγράμματος</p>
                    <p>Μάθημα Εξάμηνο</p>
                  </div>
                  <div class="col-md-3">
                  <button style="margin-top:30%;" class='btn btn-lg btn-danger'>
                    <i class="fas fa-trash-alt"></i>
                  </button>
                  </div>
                </div>
              </li> -->
            </ul>
            <div id="SubmitState">
              <!-- <button style="box-shadow: 2px 2px 3px rgb(112, 111, 111); margin-left:35%; margin-top:2%; margin-bottom:10%;" class="btn btn-lg btn-primary">Ολοκλήρωση</button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
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