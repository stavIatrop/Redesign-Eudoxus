<head>
  <title>Εύδοξος - Προφίλ</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">

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
  <script src="js/profileEkdoti.js"></script>
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
                        <a class="nav-link" href="http://localhost/sdi1500048_sdi1500116/searchbooks.php">Αναζήτηση Συγγραμμάτων</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Επικοινωνία</a>
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
                                        
                </div>
            </div>
            <div class="col-1"></div>
            <div id="profContent" class="col-5">
                <div class="card profileCard">

                    <div class="card-header"> Προφίλ </div>

                    <div class="card-body">

                        <form>
                            <div class="form-group">
                                <label for="exampleInputName">Όνομα Χρήστη</label>
                                <input type="text" class="form-control" id="exampleInputName" value="AchilleasPap" autocomplete="off">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Νέος Κωδικός</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Νέος Κωδικός">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Επιβεβαίωση Νέου Κωδικού</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                            </div>
                            <div class="text-center" style="margin-top: 25px">
                                <button type="submit" class="btn btn-success" >Αποθήκευση</button>
                            </div>
                        </form>


                    </div>
                    
                </div>
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