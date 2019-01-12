<head>

  <title>Εύδοξος - Αρχική</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <script src="js/jquery.js"></script> -->
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link rel="stylesheet" type="text/css" href="css/newsContainer.css">
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/homepage.js"></script>
  <script src="js/newsContainer.js"></script>
  <script src="js/totop.js"></script>
  

</head>
<body>
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
                    <a class="nav-link " href="http://localhost/sdi1500048_sdi1500116/searchbooks.php">Αναζήτηση Συγγραμμάτων</a>
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
    <div class="row indexDims" style="position:relative; margin-top: 2%; z-index:0">
      <div class="col-lg-9" style="padding-left: 2%; ">
        <div class="row infoContainer borderContainer rounded" style="width:100%;">
          <div class="col-lg-2 col-md-4">
            <div class="row" style="height:25%">
              <button id="foititis" onclick="selectInfo(this.id)"  class="infoButton btn btnMiddle rounded-0 active"><i class="fas fa-graduation-cap"></i>    Φοιτητής</button>
            </div>
            <div class="row" style="height:25%">
              <button id="ekdotis" onclick="selectInfo(this.id)" class="infoButton btn btnMiddle rounded-0"><i class="fas fa-book"></i>    Εκδότης</button>
            </div>
            <div class="row" style="height:25%">
              <button id="grammateia" onclick="selectInfo(this.id)" class="infoButton btn btnMiddle rounded-0"><i class="fas fa-landmark"></i>    Γραμματεία</button>
            </div>
            <div class="row" style="height:25%">
              <button id="shmeio" onclick="selectInfo(this.id)" class="infoButton btn btnMiddle rounded-0"><i class="fas fa-truck"></i>    <span>Σημείο<br>Διανομής</span></button>
            </div>
          </div>
         
          <div id="foititisInfo" class="col-lg-10 col-md-8">
            <p class=" pull-right infoTitle">Ο φοιτητής μπορεί να:</p>
            <ul style="padding-left: 15%;">
              <li class="infoAbility">πραγματοποιήσει <a href="http://localhost/sdi1500048_sdi1500116/getbooks.php">δήλωση συγγραμμάτων</a></li>
              <li class="infoAbility">μεταβεί στην <a href="#" onclick="profileGo('curr')"> τρέχουσα δήλωση</a></li>
              <li class="infoAbility"><a href="http://localhost/sdi1500048_sdi1500116/searchbooks.php">αναζητήσει</a> συγγράμματα</li>
            </ul>
            <p class="infοDeadline">Προθεσμία Δηλώσεων Συγγραμμάτων: 17/11/2018</p>
          </div>
          <div id="ekdotisInfo" class="col-lg-10 col-md-8" style="display: none;">
            <p class=" pull-right infoTitle">Ο εκδότης μπορεί να:</p>
            <ul style="padding-left: 15%;">
              <li class="infoAbility"><a href="http://localhost/sdi1500048_sdi1500116/submitBook.php">καταχωρήσει</a> ένα συγγραμμα</li>
              <li class="infoAbility">επεξεργαστεί τα τρέχοντα <a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">καταχωρημένα συγγράμματα</a></li>
              <li class="infoAbility"><a href="http://localhost/sdi1500048_sdi1500116/searchbooks.php">αναζητήσει</a> συγγράμματα</li>
            </ul>
          </div>
          <div id="grammateiaInfo" class="col-lg-10 col-md-8" style="display: none;">
            <p class=" pull-right infoTitle">Η γραμματεία μπορεί να:</p>
            <ul style="padding-left: 15%;">
              <li class="infoAbility">Lorem ipsum dolor sit amet <a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Lorem ipsum </a></li>
              <li class="infoAbility">Lorem <a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Lorem ipsumt amet</a></li>
              <li class="infoAbility"><a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Lorem ipsum </a> Lorem ipsum</li>
            </ul>
          </div>
          <div id="shmeioInfo" class="col-lg-10 col-md-8" style="display: none;">
            <p class=" pull-right infoTitle">Το σημείο διανομής μπορεί να:</p>
            <ul style="padding-left: 15%;">
              <li class="infoAbility">Lorem ipsum dolor sit amet <a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Lorem ipsum </a></li>
              <li class="infoAbility">Lorem <a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Lorem ipsumt amet</a></li>
              <li class="infoAbility"><a href="http://localhost/sdi1500048_sdi1500116/underConstruction.php">Lorem ipsum </a> Lorem ipsum</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
         
        <div class="card" style="width: 20rem;">
          <div class="card-header"> <i class="fa fa-list-alt" ></i><b>Ανακοινώσεις</b></div>
          <div class="card-body">
            
                <ul id="demo1">
                  <li class="news-item span4 collapse-group">Προθεσμία Δήλωσης Συγγραμμάτων: Παρασκευή 21 Δεκεμβρίου 2018<p class="collapse" id="viewdetails3">Προθεσμία Παραλαβής Συγγραμμάτων: Παρασκευή 18 Ιανουαριου 2019</p> <a onclick="isClicked()" id="lessIsMore" data-toggle="collapse" data-target="#viewdetails3" href="#" style="color:rgb(35, 105, 33)">Περισσότερα... </a></li>
                  <li class="news-item">Προθεσμία Παραλαβής Συγγραμμάτων: Παρασκευή 18 Ιανουαριου 2019 </li>
                  <li class="news-item">Προθεσμία Καταχώρησης Συγγραμμάτων: Παρασκευή 27 Ιουλίου 2018 </li>
                  <li class="news-item">Προθεσμία Καταχώρησης Προγράμματος Σπουδών: Παρασκευή 14 Σεπτεμβρίου 2018 </li>
                </ul>
          </div>
          <div class="card-footer">
          <nav aria-label="News navigation">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-down"></i></a></li>
              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-up"></i></a></li>
            </ul>
          </nav>
          </div>
        </div>       
       
      </div>
    </div>
  </div>
  <div style="background: #E7E7E7;" class="row">
    <div  class="col-md-2">
    </div>
    <div class="col-md-8">
      <footer class="section footer-classic context-dark bg-image">
        <div class="container">
          <div style="padding-top:5%; padding-bottom: 3%;" class="row row-30">
            <div style="border-right: 1px solid grey;" class="col-md-3 col-xl-4">
              <div class="pr-xl-3">
                <p class="footerHeader">Εύδοξος</p>
                <!-- Rights-->
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
    </div>
    <div class="col-md-2">
    </div>
  </div>
</body>
