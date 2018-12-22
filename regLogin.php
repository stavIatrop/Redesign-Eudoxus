<head>
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
  <script src="js/regLogin.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- <script src="js/homepage.js"></script> -->

</head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <div class="container-fluid">
    <div class="row topPart">
      <div class="col-md-12">
        <div class="row topTopPart">
          <div class="col-md-1">
            <a class="logoDiv" href="homepageUrl"><img class="logo" src="images/logo.png" alt="Logo"><p class="logoText">Εύδοξος</p></a>
          </div>
          <div class="col-md-8">
            <div class="row" style="height: 50%;">
              <div class="col">
                <p class="tagline">Σύντομη πρόταση περιγραφής του ιστοχώρου</p>
              </div>
            </div>
            <div class="row" style="height: 50%;">
              <div class="col">
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <a class="iconText" href="Login"><i class="fas fa-sign-in-alt topIcons"></i><p class="loginText">Είσοδος / Εγγραφή</p></a>
          </div>
          <div class="col-md-1">
            <a class="iconText" href="Login"><i style="margin-left: 29%;" class="fas fa-user topIcons"></i><p class="loginText">Προφίλ</p></a>
          </div>
          <div class="col-md-1">
            <a href="greekVersion"><img class="flag rounded" src="images/greek.png" alt="Greek flag"></a>
            <a href="englishVersion"><img class="flag rounded" src="images/english.png" alt="Greek flag"></a>
          </div>
        </div>
        <div class="row navBarRow">
          <div class="col-md-12">
            <nav style="" class="navbar rounded navbar-expand-lg">
              <ul class="navbar-nav mr-auto">
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
                    <a class="dropdown-item" href="#">Επισκόπηση Δήλωσης</a>
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
              <form action="#" method="post" class="form-inline my-2 mylg-0">
                <input type="search" name="search" id="search" class="form-control mr-sm-2" placeholder="Τίτλος, πληροφορίες..." aria-label="Search">
                <button class="btn btn-dark" type="submit">Αναζήτηση</button>
              </form>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="row breadcrumb">
      <div class="col-md-12">
        <ul class="breadcrumbT">
          <li><a href="#">Αρχική</a></li>
          <li><a href="#">Σύνδεση / Εγγραφή</a></li>
        </ul>
      </div>
    </div>
    <div class="row regLoginRow">
        <div class="col-md-3"></div>
        <div class="col-md-2">
            <p style="padding-top:20%;"class="loginTitle">Είσοδος</p>
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Όνομα χρήστη">
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="password" class="form-control" placeholder="Κωδικός">
            <button class="btn btn-success mt-5 disabled loginRegButton">Σύνδεση</button>
            <div style="margin-bottom: 20%;"><a href="#" class="forgetPass">Έχω ξεχάσει τον κωδικό μου</a></div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1"></div>
        <div class="col-md-2">
        <p class="loginTitle mb-5">Εγγραφή</p>
        <form>
            <div class="form-group">
                <select class="form-control" id="selCateg">
                    <option>Επίλεξε κατηγορία</option>
                    <option>Φοιτητής</option>
                    <option>Εκδότης</option>
                </select>
            </div>
        </form>
        <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control"  placeholder="Όνομα χρήστη">
        <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="email" class="form-control" placeholder="email">
        <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="password" class="form-control" placeholder="Κωδικός">
        <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="password" class="form-control" placeholder="Επιβεβαίωση κωδικού">
        <div id="studNumb" style="display: none;">
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control" placeholder="Αριθμός πάσου">
        </div>
        <div id="publNumb" style="display: none;">
            <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218);" type="text" class="form-control" placeholder="Αριθμός εκδότης">
        </div>
        <button style="margin-bottom:25%;" class="btn disabled btn-success mt-5 loginRegButton">Εγγραφή</button>
        </div>
        <div class="col-md-3"></div>
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