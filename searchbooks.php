<head>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/searchbooks.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/getbooks.css" rel="stylesheet" type="text/css"  media="all">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/searchbooks.js"></script>
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
          <li><a href="#">Αναζήτηση Συγγραμμάτων</a></li>
        </ul>
      </div>
    </div>
    <div class="row" style="min-height:400px;">
        <div class="col-md-12">
          <div style="padding-bottom: 4%; padding-top: 3%;" class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <form>
                <div class="form-inline">
                  <input type="text" class="form-control mr-3 inputSearch col-md-10" placeholder="Τίτλος, συγγραφέας, ISBN, λέξεις κλειδιά..." id="searchInp">
                  <button onclick="search()" style="box-shadow: 2px 2px 3px rgb(179, 177, 177);" class="btn btn-success">Αναζήτηση</button>
                </div>
              </form>
            </div>
            <div class="col-md-2"></div>
          </div>
          <div style="display: none;" id="searchList" class="row">
            <div class="col-md-2">
              <p class="filterTitle">Φίλτρα</p>
              <!-- <div class="row" style="border-bottom: 2px solid #3D8A3A; padding-bottom: 5%;">
                <div class="col-md-10">
                  <i class="fas fa-times mr-1 btn filterCancel"></i><span>Σελίδες 100-199</span>
                </div>
                <div class="col-md-2">
                </div>
              </div> -->
              <div style="margin-top: 16%;" class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-10">
                  <span>Εξάμηνο</span><i id="canSem" onclick="cancelFilter(this.id)" class="fas fa-times ml-1 btn filterCancel"></i>
                  <form>
                    <div style="margin-bottom: 20%; margin-top: 5%;" class="form-group">
                      <select style="width: 80%;" class="form-control" id="selSem">
                        <option>Επίλεξε εξάμηνο</option>
                        <option>1ο</option>
                        <option>2ο</option>
                        <option>3ο</option>
                        <option>4ο</option>
                        <option>5ο</option>
                        <option>6ο</option>
                        <option>7ο</option>
                        <option>8ο</option>
                      </select>
                    </div>
                  </form>
                  <span>Έκδοση μετά το έτος</span><i id="canYear" onclick="cancelFilter(this.id)" class="fas fa-times ml-1 btn filterCancel"></i>
                  <form>
                    <div style="margin-bottom: 15%; margin-top: 5%;" class="form-group">
                      <select style="width: 80%;" class="form-control" id="selYear">
                        <option>Επίλεξε έτος</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select>
                    </div>
                  </form>
                  <div><span>Σελίδες</span><i id="canPag" onclick="cancelFilter(this.id)" class="fas fa-times ml-1 btn filterCancel"></i></div>
                  <form id="pages" style="margin-top:5%;">
                    <div class="radio">
                      <label><input id="pag1"class="mr-2" onclick="choosePages(this.id)" type="radio" name="optradio">Έως 100</label>
                    </div>
                    <div class="radio">
                      <label><input id="pag2"class="mr-2" onclick="choosePages(this.id)" type="radio" name="optradio">100 - 199</label>
                    </div>
                    <div class="radio">
                      <label><input id="pag3"class="mr-2" onclick="choosePages(this.id)" type="radio" name="optradio">200 - 349</label>
                    </div>
                    <div class="radio">
                      <label><input id="pag4"class="mr-2" onclick="choosePages(this.id)" type="radio" name="optradio">350 - 499</label>
                    </div>
                    <div class="radio">
                      <label><input id="pag5"class="mr-2" onclick="choosePages(this.id)" type="radio" name="optradio">500 και άνω</label>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div id="showBooks" style="margin-top:-5%;">
                <ul class="bookList">
                  <li><div class="row bookRow">
                    <div class="col-md-2">
                      <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
                    </div>
                    <div class="col-md-3">
                      <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                      <p>Συγγραφέας: Όνομα Επίθετο</p>
                      <p>Σελίδες: 156</p>
                    </div>
                    <div class="col-md-3">
                      <p style= "margin-top: 2%;">Εκδόσεις: Όνομα Εκδόσεων</p>
                      <p>Έτος Έκδοσης: 2016</p>
                      <p>ISBN: 90-54321-76-1</p>
                    </div>
                    <div class="col-md-3">
                      <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Περισσότερα </button>
                    </div>
                  </div></li>
                  <li><div class="row bookRow">
                    <div class="col-md-2">
                      <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
                    </div>
                    <div class="col-md-3">
                      <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                      <p>Συγγραφέας: Όνομα Επίθετο</p>
                      <p>Σελίδες: 156</p>
                    </div>
                    <div class="col-md-3">
                      <p style= "margin-top: 2%;">Εκδόσεις: Όνομα Εκδόσεων</p>
                      <p>Έτος Έκδοσης: 2016</p>
                      <p>ISBN: 90-54321-76-1</p>
                    </div>
                    <div class="col-md-3">
                      <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Περισσότερα </button>
                    </div>
                  </div></li>
                  <li><div class="row bookRow">
                    <div class="col-md-2">
                      <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
                    </div>
                    <div class="col-md-3">
                      <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                      <p>Συγγραφέας: Όνομα Επίθετο</p>
                      <p>Σελίδες: 156</p>
                    </div>
                    <div class="col-md-3">
                      <p style= "margin-top: 2%;">Εκδόσεις: Όνομα Εκδόσεων</p>
                      <p>Έτος Έκδοσης: 2016</p>
                      <p>ISBN: 90-54321-76-1</p>
                    </div>
                    <div class="col-md-3">
                      <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Περισσότερα </button>
                    </div>
                  </div></li>
                  <li><div class="row bookRow">
                    <div class="col-md-2">
                      <img class="rounded" src="images/book.jpeg" alt="Book cover missing">
                    </div>
                    <div class="col-md-3">
                      <p style="font-weight: bold; font-size: 120%; margin-top: 2%;">Τίτλος Συγγράμματος</p>
                      <p>Συγγραφέας: Όνομα Επίθετο</p>
                      <p>Σελίδες: 156</p>
                    </div>
                    <div class="col-md-3">
                      <p style= "margin-top: 2%;">Εκδόσεις: Όνομα Εκδόσεων</p>
                      <p>Έτος Έκδοσης: 2016</p>
                      <p>ISBN: 90-54321-76-1</p>
                    </div>
                    <div class="col-md-3">
                      <button type="button" style="margin-top: 15%; box-shadow: 3px 3px 3px rgb(80, 78, 78);" class="btn shadow btn-success btn-lg">Περισσότερα </button>
                    </div>
                  </div></li>
                </ul>
              </div>
            </div>
            <div class="col-md-2">
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