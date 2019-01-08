<head>
  <title>Εύδοξος - Σύνδεση</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">

  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/getbooks.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/regLogin.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/totop.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/regLogin.js"></script>


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
            <a href="http://localhost/sdi1500048_sdi1500116/regLogin.php" class="iconText" ><i class="fas fa-sign-in-alt topIcons"></i>
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
                    <a class="nav-link active" href="http://localhost/sdi1500048_sdi1500116/">Αρχική</a>
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
                      <a class="dropdown-item" href="#">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Εκδότης
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="http://localhost/sdi1500048_sdi1500116/submitBook.php">Καταχώρηση Συγγράμματος</a>
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
                      <a class="dropdown-item" href="#">Εισαγωγή Π.Σ.</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Επεξεργασία Π.Σ.</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Βοήθεια</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Σημεια Διανομής
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Επικύρωση Παραλαβής</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Επεξεργασία Πληροφοριών</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Βοήθεια</a>
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
          <li><a href="http://localhost/sdi1500048_sdi1500116/">Αρχική</a></li>
          <li><a href="#">Σύνδεση / Εγγραφή</a></li>
        </ul>
      </div>
    </div>
    <div id="errorGet" style="display: none;" class="row text-danger">
      <!-- <div class="col-3"></div> -->
      <div class="col-12"><p class="text-center" style="font-size: 150%; font-weight: bold;">Για την ολοκλήρωση της δήλωσης συνδεθείτε/εγγραφείτε ως φοιτητής</p></div>
    </div>
    <div id="errorSubmit" style="display: none;" class="row text-danger">
      <!-- <div class="col-3"></div> -->
      <div class="col-12"><p class="text-center" style="font-size: 150%; font-weight: bold;">Για την ολοκλήρωση της καταχώρησης συνδεθείτε/εγγραφείτε ως εκδότης</p></div>
    </div>

    <div class="row regLoginRow">
        <div class="col-xl-3 col-lg-1"></div>
        <div class="col-xl-2 col-lg-4">
            <p style="padding-top:20%;"class="loginTitle">Είσοδος</p>
            <form id="loginForm">
              <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Email" id="emailLog" oninput="typeEmailLog(this.value)">
              <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="password" class="form-control" placeholder="Κωδικός" id="passLog" oninput="typePasswordLog(this.value)">
              <button id="logButton" onclick="login()" class="btn btn-success mt-5 loginRegButton" disabled>Σύνδεση</button>
              <p id="emailLogError">Συμπλήρωσε το email σου για να συνδεθείς</p>
              <p id="notPassLog">Συμπλήρωσε τον κωδικό σου για να συνδεθείς</p>
              <p id="authError">Λάθος στοιχεία χρήστη!</p>
            </form>
            
            <div style="margin-bottom: 20%;"><a href="#" class="forgetPass">Έχω ξεχάσει τον κωδικό μου...</a></div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-xl-2 col-lg-4">
          <p class="loginTitle mb-5">Εγγραφή</p>
          <form id="myForm"   data-toggle="validator" role="form">
            <div class="form-group">
                <select class="form-control" id="selCateg" name="category" onchange="selectCategory(this.value)">
                    <option value="0">Επίλεξε κατηγορία</option>
                    <option value="1">Φοιτητής</option>
                    <option value="2">Εκδότης</option>
                </select>
            </div>
          
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control"  placeholder="Όνομα χρήστη" name="username" id="userName" oninput="typeUsername(this.value)">
            
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="email" class="form-control" placeholder="email" name="email" id="eMail" oninput="typeEmail(this.value)">
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="password" class="form-control" placeholder="Κωδικός" name="password" id="pass" oninput="typePassword(this.value)">
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="password" class="form-control" placeholder="Επιβεβαίωση κωδικού" id="passVer" data-match="#pass" data-match-error="Whoops, these don't match" oninput="typePassVer(this.value)">
            <div id="studNumb" style="display: none;">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control" placeholder="Αριθμός πάσου" name="category_Id" id="catId" oninput="typeCatId(this.value)">
            </div>
            <div id="publNumb" style="display: none;">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control" placeholder="Αριθμός εκδότη" name="category_Id" id="catIdEkdot" oninput="typeCatId(this.value)">
            </div>
            
            <button id="regButton"  onclick="register()" type="submit" style="margin-bottom:25%;" class="btn btn-success mt-4 loginRegButton" disabled>Εγγραφή</button>
            <p id="notPassVer">Οι κωδικοί δεν ταιριάζουν!</p>
            <p id="emailError">Το Email υπάρχει ήδη!</p>
            <p id="regSuccess">Εγγραφήκατε επιτυχώς!</p>
          </form>
          
        </div>
        <div class="col-xl-3 col-lg-1"></div>
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