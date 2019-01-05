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
            <a class="iconText" href="Login"><i style="margin-left: 29%;" class="fas fa-user topIcons"></i>
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <li><a href="#">Καταχώρηση Συγγράμματος</a></li>
        </ul>
      </div>
    </div>


    <div style="min-height: -23px;" class="row">
    <!-- <button id="example-popover" type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
        Tooltip on right
    </button>           -->
        <div class="col-1"></div>
        <div class="col-4">
            
            <p id="elementsTitle">Στοιχεία Συγγράμματος</p>

            <form id="elementsForm" data-toggle="validator" role="form">
            
          
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control"  placeholder="Τίτλος" name="title" id="title" oninput="typeTitle(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Συγγραφείς" name="authors" id="authors" oninput="typeAuthors(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="ISBN" name="isbn" id="ISBN" oninput="typeISBN(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Εκδόσεις" id="publisher" oninput="typePublisher(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Έτος Τρέχουσας Έκδοσης" name="publishYear" id="year" oninput="typeYear(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Βάρος" name="weight" id="weight" oninput="typeWeight(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Διαστάσεις" name="dimensions" id="dims" oninput="typeDimensions(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Σελίδες" name="pages" id="pages" oninput="typePages(this.value)">
                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:75%;" type="text" class="form-control" placeholder="Τιμή" name="price" id="price" oninput="typePrice(this.value)">
                
                
            </form>
            

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
                <button type="button" class="btn btn-default btn-circle  btn-lg" data-toggle="tooltip" data-placement="right" title="π.χ. 90-12345-09-7 ή 978-960-530-165-1"><i class="fa fa-info-circle"></i></button>
            </div>
            <div class="row">
                <i id="aster3" class="fa fa-asterisk"></i>
            </div>
            <div class="row">
                <i id="aster4" class="fa fa-asterisk"></i>
            </div>
            
        </div>
        <div class="col">

            <p id="decriptionTitle">Περιγραφή Συγγράμματος</p>

            <br><br>
            <form id="descForm" data-toggle="validator" role="form">
                <ul>
                    <li>   
                        <form>
                            <div class="form-group">
                                <label for="pdfPreview">Απόσπασμα Συγγράμματος(Αρχείο pdf):</label>
                                <input type="file" class="form-control-file" id="pdfPreview">
                            </div>
                        </form>
                    </li>
                    <br><br>
                    <li>
                        <form>
                            <div class="form-group">
                                <label for="pdfPreview">Περιεχόμενα Συγγράμματος(Αρχείο pdf):</label>
                                <input type="file" class="form-control-file" id="pdfIndex">
                            </div>
                        </form>
                    </li>
                    <br><br>
                    <li>
                        <form>
                            <div class="form-group">
                                <label for="pdfPreview">Εξώφυλλο Συγγράμματος(Αρχείο εικόνας):</label>
                                <input type="file" class="form-control-file" id="cover">
                            </div>
                        </form>
                    </li>
                </ul>

                <input style="margin-top: 10%; box-shadow: 1px 1px 2px rgb(221, 218, 218); width:60%; margin-left:25px; " type="text" class="form-control" placeholder="Λέξεις Κλειδιά(Χωρισμένες με κόμμα)" name="keywords" id="keywords" oninput="typeKeywords(this.value)">
                
            </form>
            <button id="submitButton"  onclick="submit()" type="submit" class="btn btn-success " disabled>Καταχώρηση</button>
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