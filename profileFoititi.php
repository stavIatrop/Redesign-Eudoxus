<head>
  <title>Εύδοξος - Προφίλ</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/profileFoititi.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/totop.js"></script>
  <script src="js/profileFoititi.js"></script>
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
              
              include("user.class.php");
              
              if (isset($_COOKIE['user'])) {

                $user = new User(0);
                $user  = unserialize($_COOKIE['user']);
                echo '<p id="loginUsername" class="loginText">'. $user->getUsername() . ' </p>';
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <li><a href="#">Προφίλ</a></li>
                </ul>
            </div>
        </div>

        <div style="min-height: 600px;" class="row">

            <!-- <div class="col-1"> </div> -->

            
            <div class="col-3" style="border-right: 1px solid grey;">
                <div class="list-group menuCard ml-3" id="list-tab" role="tablist" >
                    <button onclick="activate(id, 'current', 'history')" class="btnPointer list-group-item list-group-item-action active" id="profileManage" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Διαχείριση Προφίλ</button>
                    <button onclick="activate(id, 'profileManage', 'history')"class="btnPointer list-group-item list-group-item-action" id="current" data-toggle="list" href="#list-current" role="tab" aria-controls="current">Τρέχουσα Δήλωση</button>
                    <button onclick="activate(id, 'profileManage', 'current')" class="btnPointer list-group-item list-group-item-action"  id="history" data-toggle="list" href="#list-history" role="tab" aria-controls="history">Ιστορικό Δηλώσεων</button>
                                        
                </div>
            </div>
            <div class="col-1"></div>
            <div id="profContent" class="col-5">
                <div class="card profileCard">

                    <div class="card-header"> Προφίλ </div>

                    <div class="card-body">

                        <!-- <form id="profileForm"> -->
                            <div class="form-group">
                                <label for="username">Όνομα Χρήστη</label>
                                <?php
                                    
                                    if (isset($_COOKIE['user'])) {

                                        $user = new User(0);
                                        $user  = unserialize($_COOKIE['user']);
                                        echo '<input type="text" oninput="typeUsername(this.value)" class="form-control" id="username" value="'. htmlspecialchars($user->getUsername()) . '" autocomplete="off">';
                                    }
                                ?>
                                <!-- <input type="text" class="form-control" id="exampleInputName" value="AchilleasPap" autocomplete="off"> -->
                                
                            </div>
                            <div>
                                <p id="errorUsername">Το Όνομα Χρήστη είναι απαραίτητο!</p>
                            </div>
                            <div class="form-group">
                                <label for="password">Νέος Κωδικός</label>
                                <input type="password" oninput="typeNewPass(this.value)" class="form-control" id="password" placeholder="Νέος Κωδικός">
                            </div>
                            <div class="form-group">
                                <label for="passwordVer">Επιβεβαίωση Νέου Κωδικού</label>
                                <input type="password" oninput="typeNewPassVer(this.value)" class="form-control" id="passwordVer" placeholder="">
                            </div>
                            <div>
                            <p id="errorPassword">Οι κωδικοί δεν ταιριάζουν!</p>
                            </div>
                            <label for="selUni" >Σχολή:</label>
                            <select name="selUni" id="selUni" class="uniSelect custom-select mb-3">
                                <option id="defUni" onclick="changeUni(this.value)"  value="0">Επίλεξε Πανεπιστήμιο</option>
                                
                                <?php
                                    include 'login.php';

                                    if (isset($_COOKIE['user'])) {

                                        $user = new User(0);
                                        $user  = unserialize($_COOKIE['user']);
                                        
                                    }

                                    $conn = OpenCon();
                                    
                                    $uniesQuery = "SELECT DISTINCT(uniName) FROM `Course`";
                                    $unies = $conn->query($uniesQuery);
                                    if ($unies->num_rows > 0) {
                                    
                                        while($row = $unies->fetch_assoc()) {
                                            
                                            if( $row['uniName'] == $user->getUniName()) {

                                                echo '<option onclick="changeUni(this.value)" value="' . htmlspecialchars($row['uniName']) . '" selected>' 
                                                . htmlspecialchars($row['uniName']) 
                                                . '</option>';
                                            } else {
                                                
                                                echo '<option onclick="changeUni(this.value)" value="' . htmlspecialchars($row['uniName']) . '">' 
                                                . htmlspecialchars($row['uniName']) 
                                                . '</option>';
                                            }
                                            
                                        }
                                    } 
                                    else {
                                        echo "0 results";
                                    }
                                    CloseCon($conn);
                                ?>
                            </select>
                            
                            <label for="selDep" >Τμήμα:</label>
                            <select id="selDep" disabled class=" custom-select mb-3" >
                                <option id="defDep" onclick="changeDep(this.value)"  value="0" >Επίλεξε Τμήμα</option>
                                
                                <?php
                                    
                                    if (isset($_COOKIE['user'])) {

                                        $user = new User(0);
                                        $user  = unserialize($_COOKIE['user']);
                                        
                                    }

                                    $conn = OpenCon();
                                    
                                    $depsQuery = "SELECT DISTINCT(uniDepartment) FROM `Course`";
                                    $deps = $conn->query($depsQuery);
                                    if ($deps->num_rows > 0) {
                                    
                                        while($row = $deps->fetch_assoc()) {
                                            
                                            if( $row['uniDepartment'] == $user->getUniDepartment()) {

                                                echo '<option onclick="changeDep(this.value)" value="' . htmlspecialchars($row['uniDepartment']) . '" selected>' 
                                                . htmlspecialchars($row['uniDepartment']) 
                                                . '</option>';
                                            } else {
                                                
                                                echo '<option onclick="changeDep(this.value)" value="' . htmlspecialchars($row['uniDepartment']) . '">' 
                                                . htmlspecialchars($row['uniDepartment']) 
                                                . '</option>';
                                            }
                                            
                                        }
                                    } 
                                    else {
                                        echo "0 results";
                                    }
                                    CloseCon($conn);
                                ?>
                            </select>
                            <div class="text-center" style="margin-top: 25px">
                                <button type="submit" class="btn btn-success" onclick="save()" >Αποθήκευση</button>
                            </div>
                            <div>
                                <p id="updateSuccess">Οι πληροφορίες του προφίλ ενημερώθηκαν με επιτυχία!</p>
                            </div>
                        <!-- </form> -->


                    </div>
                    
                </div>
            </div>
            <div id="historyContent" style="display: none;" class="col-6">
                <h2 class="mb-5" style="text-align: center;">Ιστορικό Δηλώσεων</h2>
                <div class="accordion" id="accordionExample">

                    <?php
                        if(isset($_COOKIE['user'])) {
                            $conn = OpenCon();
                            $user = new User(0);
                            $user  = unserialize($_COOKIE['user']);

                            $userId = $user->getUserId();
                            $sqlGetStatesInfo = "SELECT statementId, current, semesterStatement 
                                                FROM `Statement` WHERE User_userId = '$userId' 
                                                ORDER BY semesterStatement DESC";
                            $statementsRes = mysqli_query($conn, $sqlGetStatesInfo);
                            if (mysqli_num_rows($statementsRes) > 0) {
                                // output data of each row
                                $counterCard = 0;
                                while($rowState = mysqli_fetch_assoc($statementsRes)) {
                                    echo '<div class="card historyCard">
                                    <div class="card-header" id="heading' . $counterCard .'">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapse' . $counterCard .'" aria-expanded="false" aria-controls="collapse' . $counterCard .'">
                                            ' . $rowState['semesterStatement'] .'ο Εξάμηνο';
                                    if($rowState['semesterStatement'] % 2 == 0) {
                                        echo ' Εαρινό';
                                    }
                                    else {
                                        echo ' Χειμερινό';
                                    }
                                    echo '</button>';
                                    if($rowState['current'] == 1) {
                                        echo '<span class="activeState"> Τρέχουσα Δήλωση</span>';
                                    }
                                        
                                    echo '<button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapse' . $counterCard .'" aria-expanded="true" aria-controls="collapse' . $counterCard .'">
                                            <i class="fas fa-caret-down" id="caret1"></i>
                                        </button>
                                    </h5>
                                    </div>
                                    
                                    <div id="collapse' . $counterCard .'" class="collapse" aria-labelledby="heading' . $counterCard .'" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul class="bookList">';
                                    $stateId = $rowState['statementId'];
                                    $sqlGetStateBooks = "SELECT Course.courseName, Book.title, Book.authors, Book.ISBN, Book.cover 
                                                         FROM `StatedBooks`, `Book`, `Course` 
                                                         WHERE Statement_statementId = '$stateId' and StatedBooks.bookId = Book.bookId 
                                                         and StatedBooks.courseId = Course.courseId";
                                    $statedBooksRes = mysqli_query($conn, $sqlGetStateBooks);
                                    while($rowBook = mysqli_fetch_assoc($statedBooksRes)) {
                                        echo '<li><div class="row bookRow">
                                                <div class="col-md-3">
                                                    <img style="width: 75%; height: 80%;" class="rounded" src="images/book.jpeg" alt="Book cover missing">
                                                </div>
                                                <div class="col-md-9">
                                                    <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Μάθημα: ' . $rowBook['courseName'] . '</p>
                                                    <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος: ' .$rowBook['title'] .'</p>
                                                    KEY3d       <p class="">Συγγραφέας: ' . $rowBook['authors'] . '</p>
                                                    <p>ISBN: ' . $rowBook['ISBN']. '</p>
                                                </div>
                                                <!-- <div class="col-md-3">
                                                </div> -->
                                            </div></li>';
                                    }


                                    echo '</ul>
                                        </div>
                                    </div>
                                </div>';
                                    $counterCard++;
                                }
                            } else {
                                echo '<h4 style="text-align: center; margin-top:10%;" >Δεν έχετε πραγματοποιήσει δήλωση...</h4>
                                      <div style="margin-top:5%;"class="text-center"><button onclick="getbooks()" class="btn btn-success btn-lg">Δήλωση Συγγραμμάτων</button></div>';
                            }
                            
                            

                        }
                    ?>
                </div>
            </div>
            <div id="currentContent" style="display: none;" class="col-md-6">
                <!-- <h4 class="mb-5" style="text-align: center;">Τρέχουσα Δήλωση - Χειμερινού Εξαμήνου 2018-2019</h4>
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <button style="width:180%;" onclick="getbooks()" class="btn btn-md btn-success"><i class="fas fa-edit mr-2"></i>Τροποποίηση Δήλωσης</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-5"><p class="stateHeaders">PIN παραλαβής: 123123213</p></div>
                            <div class="col-6"><p class="stateHeaders">Προθεσμία Παραλαβής: 30/12/2018</p></div>
                        </div>                        

                    </div>
                    <div class="col-2">
                        <button style="width:180%;" class="btn btn-md btn-danger"><i class="fas fa-file-pdf mr-2"></i>Κατέβασμα ως PDF</button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <div class="card historyCard"> -->
                            <?php
                                if(isset($_COOKIE['user'])) {
                                    $conn = OpenCon();
                                    $user = new User(0);
                                    $user  = unserialize($_COOKIE['user']);
        
                                    $userId = $user->getUserId();
                                    $sqlGetCurrentCourses = "SELECT `courseName`, `title`, `weight`, `pages`, `cover`, `authors`, `publishYear`, `ISBN` FROM `StatedBooks`, `Book`, `Course`, `Statement`  
                                                         WHERE `StatedBooks`.`Statement_statementId` = `Statement`.`statementId` 
                                                         and Book.bookId = StatedBooks.bookId and Course.courseId = StatedBooks.courseId 
                                                         and `Statement`.`current` = 1 and `Statement`.`User_userId` = '$userId'";
                                    $statementsCoursesRes = mysqli_query($conn, $sqlGetCurrentCourses);
                                    if (mysqli_num_rows($statementsCoursesRes) > 0) {
                                        echo '<h4 class="mb-5" style="text-align: center;">Τρέχουσα Δήλωση - Χειμερινού Εξαμήνου 2018-2019</h4>
                                                <div class="row">
                                                    <div class="col-10"></div>
                                                    <div class="col-2">
                                                        <button style="width:180%;" onclick="getbooks()" class="btn btn-md btn-success"><i class="fas fa-edit mr-2"></i>Τροποποίηση Δήλωσης</button>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-10">
                                                        <div class="row">
                                                            <div class="col-5"><p class="stateHeaders">PIN παραλαβής: 123123213</p></div>
                                                            <div class="col-6"><p class="stateHeaders">Προθεσμία Παραλαβής: 30/12/2018</p></div>
                                                        </div>                        
                                
                                                    </div>
                                                    <div class="col-2">
                                                        <button style="width:180%;" class="btn btn-md btn-danger"><i class="fas fa-file-pdf mr-2"></i>Κατέβασμα ως PDF</button>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <div class="card historyCard">';
                                        // output data of each row
                                        $counterCourse = 0;
                                        while($rowCourse = mysqli_fetch_assoc($statementsCoursesRes)) {
                                            echo '<div class="card-header" id="headingCourse' . $counterCourse .'">
                                                    <div class="row stateCardHead mb-0">
                                                        <div class="col-4"><p>Μάθημα: ' . $rowCourse['courseName'] .'</p></div>
                                                        <div class="col-5"><p> Σημείο Διανομής: Εκδόσεις Sci-Pub</p></div>
                                                        <div class="col-2"><p class="openPoint">Ανοιχτό Τώρα</p></div>
                                                        <div class="col-1">
                                                            <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapseCourse' . $counterCourse .'" aria-expanded="true" aria-controls="collapseCourse' . $counterCourse .'">
                                                                <i class="fas fa-caret-down" id="caret1"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div id="collapseCourse' . $counterCourse .'" class="collapse" aria-labelledby="headingCourse' . $counterCourse .'" data-parent="#none">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div  style="border-right: 1px solid grey" class="col-6">
                                                                <div class="row"><div class="col-12"><p style="font-weight: bold; text-align: center;">Επιλεγμένο Σύγγραμμα</p></div></div>
                                                                <div class="row">
                                                                    <div class="col-4"><img style="width: 65%; height: 75%;" class="rounded" src="images/book.jpeg" alt="Book cover missing"></div>
                                                                    <div class="col-8">
                                                                        <p>Τιτλος: ' . $rowCourse['title'] .'</p>
                                                                        <p>Συγγραφέας: ' . $rowCourse['authors'] .'</p>
                                                                        <p>Σελίδες: ' . $rowCourse['pages'] .'</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <p>Έτος έκδοσης: ' . $rowCourse['publishYear'] .'</p>
                                                                        <p>ISBN: ' . $rowCourse['ISBN'] .'</p>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <button class="btn btn-md mt-2 btn-info">Περισσότερα</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-1" style="margin-right:-3%;"></div>
                                                            <div class="col-5">
                                                                <div class="row"><div class="col-12"><p style="font-weight: bold; text-align: center;">Σημείο Διανομής</p></div></div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <p>Όνομα: Εκδόσεις Sci-Pub</p>
                                                                        <p>Διεύθυνση: Akadimias 42, Athina Τ.Κ.: 10672</p>
                                                                        <p>Ωράριο: Καθημερινές 9πμ - 2μμ</p>
                                                                        <div class="row">
                                                                            <div class="col-7">
                                                                                <p class="openPoint">Αποθέματα: 53</p>
                                                                                <p>Τηλέφωνο: 2101231231</p>
                                                                            </div>
                                                                            <div class="col-5"><button class="btn btn-md mt-4 btn-success"><i class="fas mr-2 fa-map-marked-alt"></i>Οδηγίες</button></div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';
                                            $counterCourse++;
                                        }
                                        echo ' </div>
                                                </div>
                                            </div>
                                        </div>';
                                    } else {
                                        echo '<h4 style="text-align: center; margin-top:10%;" >Δεν έχετε πραγματοποιήσει δήλωση...</h4>
                                              <div style="margin-top:5%;"class="text-center"><button onclick="getbooks()" class="btn btn-success btn-lg">Δήλωση Συγγραμμάτων</button></div>';
                                    }
                                    
                                    
        
                                }
                            ?>
                        <!-- </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="col-2"></div> -->

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