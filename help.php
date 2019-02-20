<head>
  <title>Εύδοξος - Βοήθεια</title>
  <link rel="icon" href="images/favicon.ico" type="image/ico">

  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"></head>
  <link href="css/gridLayouts.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/topPart.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/navBar.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/footer.css" rel="stylesheet" type="text/css"  media="all">
  <link href="css/help.css" rel="stylesheet" type="text/css"  media="all">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/totop.js"></script>
  <script src="js/help.js"></script>
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
                <li><a href="#">Βοήθεια</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p style="margin-bottom: 4%; text-align: center; font-size: 170%; font-weight: bold;">Βοήθεια - Συχνές ερωτήσεις</p>
            </div>
        </div>
        <div class="row"> 

            <div class="col-1"></div>
            <div class="col-2">
                <div class="list-group menuCard ml-3" id="list-tab" role="tablist" >
                    <button onclick="activateHelp(this.id, 'foitAccord')" class="btnPointer helpNav list-group-item-success list-group-item list-group-item-action" id="helpFoit" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Είμαι φοιτητής</button>
                    <button onclick="activateHelp(this.id, 'pubAccord')" class="btnPointer helpNav list-group-item-success list-group-item list-group-item-action" id="helpEkd" data-toggle="list" href="#list-current" role="tab" aria-controls="current">Είμαι εκδότης</button>
                    <button onclick="activateHelp(this.id, 'secAccord')" class="btnPointer helpNav list-group-item-success list-group-item list-group-item-action"  id="helpGramm" data-toggle="list" href="#list-history" role="tab" aria-controls="history">Είμαι γραμματεία σχολής</button>            
                    <button onclick="activateHelp(this.id, 'dianAccord')" class="btnPointer helpNav list-group-item-success list-group-item list-group-item-action"  id="helpDian" data-toggle="list" href="#list-history" role="tab" aria-controls="history">Είμαι σημείο διανομής</button>            
                </div>
            </div>

                
            <div class="col-1"></div>
            <div style="display: none;" id="foitAccord" class="col-6">
                <div class="card-header" id="headingFoitOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapseFoitOne" aria-expanded="false" aria-controls="collapseFoitOne">
                            Πώς να κάνω δήλωση συγγραμμάτων?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapseFoitOne" aria-expanded="true" aria-controls="collapseFoitOne">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseFoitOne" class="collapse" aria-labelledby="headingFoitOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4>Βήμα 1</h4>
                        <p>Από την μπάρα πλοήγησης επιλέγω <b>Φοιτητής > Δήλωση Συγγραμμάτων</b>.</p>
                        <img style="width: 65%; height 45%; margin-left: 13%; " src="images/startState.png" alt="Missing start state image">
                        <h4>Βήμα 2</h4>
                        <p>Επιλέγω <b>πανεπιστήμιο, τμήμα, εξάμηνο και μάθημα</b> για να εμφανιστούν τα συγγράμματα του συγκεκριμένου μαθήματος.</p>
                        <img style="width: 65%; height 45%; margin-left: 13%; " src="images/chooseUni.png" alt="Missing start state image">
                        <h4>Βήμα 3</h4>
                        <p>Επιλέγω <b class="text-success">Προσθήκη</b> στο σύγγραμμα που θέλω. Το σύγραμμα προστίθεται σε μια προσωρινή δήλωση.</p>
                        <p style="font-weight: bold;" class="text-center text-danger">Επιτρέπεται να δηλωθεί 1 σύγγραμμα ανά μάθημα!</p>
                        <p>Σε περίπτωση που θέλω να αφαιρεθεί το σύγγραμμα από την δήλωση επιλέγω 
                            <b class="text-danger">Αφαίρεση</b> από την λίστα ή κάνω κλικ στον <b class="text-danger">κόκκινο κάδο</b> στα δεξιά.</p>
                        
                        <p style="font-weight: bold; text-align: center;">Επαναλαμβάνω τα βήματα 2 και 3 μέχρι να επιλέξω όλα τα επιθυμητά συγγράμματα.</p>

                        <h4>Βήμα 4</h4>
                        <p>Στο δεξί μέρος της οθόνης επιλέγω <b class="text-primary">Ολοκλήρωση.</b></p>
                        
                        <p><b>Αν δεν είμαι συνδεδεμένος</b> αυτόματα μεταβιβάζομαι να κάνω εγγραφή ή σύνδεση 
                            <b>(η προσωρινή δήλωση παραμένει αποθηκευμένη)</b> και ξαναεπιλέγω <b class="text-primary">Ολοκλήρωση.</b></p>
                        <img style="width: 25%; height 25%; margin-left: 29%; " src="images/completeState.png" alt="Missing start state image">

                        <p>Αυτόματα μεταβιβάζομαι στο <b>Προφίλ μου > Τρέχουσα δήλωση</b> όπου βρίσκω τις απαραίτητες πληροφορίες για
                            την παραλαβή των συγγραμμάτων.</p>
                    </div>
                </div>

                <div class="card-header" id="headingFoitTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapseFoitTwo" aria-expanded="false" aria-controls="collapseFoitTwo">
                            Πώς να επεξεργαστώ την τρέχουσα δήλωση?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapseFoitTwo" aria-expanded="true" aria-controls="collapseFoitTwo">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseFoitTwo" class="collapse" aria-labelledby="headingFoitTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4>Βήμα 1</h4>
                        <p>Αφού έχω συνδεθεί επιλέγω <b>Προφίλ</b> και στη συνέχεια <b>Τρέχουσα Δήλωση</b>.</p>
                        <span><img style="width: 35%; height 35%; margin-left: 4%; " src="images/chooseProfile.png" alt="Missing start state image"></span>
                        <span><img style="width: 35%; height 25%; margin-left: 13%; " src="images/chooseCurrent.png" alt="Missing start state image"></span>

                        <h4>Βήμα 2</h4>
                        <p>Επιλέγω <b class="text-success"style="font-weight: bold;">Τροποποίηση Δήλωσης</b>.</p>
                        <img style="width: 65%; height 45%; margin-left: 13%; " src="images/chooseEdit.png" alt="Missing start state image">
                        
                        <h4>Βήμα 3</h4>
                        <p> <b class="text-center text-danger">Αφαιρώ</b> και <b class="text-success">Προσθέτω</b> συγγράμματα τροποποιώντας κατάλληλα την δήλωση μου.</p>

                        <h4>Βήμα 4</h4>
                        <p>Όταν τελειώσω στο δεξί μέρος της οθόνης επιλέγω <b class="text-primary">Ολοκλήρωση</b> για την κατοχύρωση της νέας δήλωσης.</p>
                        <img style="width: 25%; height 25%; margin-left: 29%; " src="images/completeState.png" alt="Missing start state image">

                    </div>
                </div>

                <div class="card-header" id="headingFoitThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapseFoitThree" aria-expanded="false" aria-controls="collapseFoitThree">
                            Πώς να αναζητήσω συγγράμματα?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapseFoitThree" aria-expanded="true" aria-controls="collapseFoitThree">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseFoitThree" class="collapse" aria-labelledby="headingFoitThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4>Βήμα 1</h4>
                        <p>Επιλέγω Αναζήτηση Συγγραμμάτων από την μπάρα πλοήγησης</p>
                        <span><img style="width: 65%; height 65%; margin-left: 13%; " src="images/chooseSearch.png" alt="Missing start state image"></span>

                        <h4>Βήμα 2</h4>
                        <p>Γράφω τον όρο αναζήτησης μου και πατάω <b class="text-success">Αναζήτηση</b>.</p>
                        <p>O όρος αυτός μπορεί να είναι:</p>
                        <ul>
                            <li>Τίτλος βιβλίου</li>
                            <li>Συγγραφέας</li>
                            <li>ISBN</li>
                            <li>Λέξη κλειδί</li>
                        </ul>
                        
                        <h4>Βήμα 3</h4>
                        <p>Σε περίπτωση που θέλω να περιορίσω τα αποτελέσματα χρησιμοποιώ τα <b>φίλτρα</b> στα αριστερά.</p>
                        <img style="width: 19%; height 14%; margin-left: 5%; " src="images/filter.png" alt="Missing start state image">

                    </div>
                </div>

                <div class="card-header" id="headingFoitFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapseFoitFour" aria-expanded="false" aria-controls="collapseFoitFour">
                            Πώς να επεξεργαστώ το Προφίλ μου?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapseFoitFour" aria-expanded="true" aria-controls="collapseFoitFour">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapseFoitFour" class="collapse" aria-labelledby="headingFoitFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <h2>Υπο κατασκευή</h2>

                    </div>
                </div>
            </div>

            <div style="display: none;" id="pubAccord" class="col-6">
                <div class="card-header" id="headingPubOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapsePubOne" aria-expanded="false" aria-controls="collapsePubOne">
                            Πώς να καταχωρήσω ένα σύγγραμμα?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapsePubOne" aria-expanded="true" aria-controls="collapsePubOne">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapsePubOne" class="collapse" aria-labelledby="headingPubOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4>Βήμα 1</h4>
                        <p>Από την μπάρα πλοήγησης επιλέγω <b>Εκδότης > Καταχώρηση Συγγράμματος</b>.</p>
                        <img style="width: 65%; height 45%; margin-left: 13%; " src="images/chooseSubmit.png" alt="Missing start state image">
                        <h4>Βήμα 2</h4>
                        <p>Συμπληρώνω κατάλληλα τα πεδία. Τα πεδία με αστερίσκο ειναι <b>υποχρεωτικά</b></p>
                        <ul>
                            <li><b>ISBN</b> Σε μία από τις 2 αποδεκτές μορφές π.χ. 90-12345-09-7 ή 978-960-530-165-1</li>
                            <li><b>Βάρος</b>: Σε κιλά και πάντα σε δεκαδική μορφή (ως υποδιαστολή βάζουμε τελεία) π.χ. 4.3 ή 1.0</li>
                            <li><b>Διαστάσεις</b>: Σε εκατοστά χωρισμένες με x (λατινικό χ) π.χ. 14x23</li>
                            <li><b>Τιμή</b>: Σε ευρώ και πάντα σε δεκαδική μορφή (ως υποδιαστολή βάζουμε τελεία) π.χ. 24.3 ή 31.0</li>
                            <li><b>Λέξεις κλειδιά</b>: Λέξεις που εκφράζουν το περιεχόμενο του βιβλίου (τουλάχιστον μία) χωρισμένες με κόμμα π.χ. Φυσική, Μηχανική</li>
                        </ul>
                        <h4>Βήμα 3</h4>
                        <p>Επιλέγω <b class="text-success">Καταχώρηση</b> όταν έχω συμπληρώσει  τα επιθυμητά πεδία.</p>
                        <p><b>Αν δεν είμαι συνδεδεμένος</b> αυτόματα μεταβιβάζομαι να κάνω εγγραφή ή σύνδεση 
                            <b>(η προσωρινή καταχώρηση παραμένει αποθηκευμένη)</b> και ξαναεπιλέγω <b class="text-success">Καταχώρηση.</b></p>
                    </div>
                </div>

                <div class="card-header" id="headingPubTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapsePubTwo" aria-expanded="false" aria-controls="collapsePubTwo">
                            Πώς να διαχειριστώ (επεξεργαστώ, διαγράψω) ένα σύγγραμμα μου?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapsePubTwo" aria-expanded="true" aria-controls="collapsePubTwo">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapsePubTwo" class="collapse" aria-labelledby="headingPubTwo" data-parent="#accordionExample">
                    <h2>Υπο κατασκευή</h2>
                </div>

                <div class="card-header" id="headingPubThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapsePubThree" aria-expanded="false" aria-controls="collapsePubThree">
                            Πώς να αναζητήσω συγγράμματα?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapsePubThree" aria-expanded="true" aria-controls="collapsePubThree">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapsePubThree" class="collapse" aria-labelledby="headingPubThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <h4>Βήμα 1</h4>
                        <p>Επιλέγω Αναζήτηση Συγγραμμάτων από την μπάρα πλοήγησης</p>
                        <span><img style="width: 65%; height 65%; margin-left: 13%; " src="images/chooseSearch.png" alt="Missing start state image"></span>

                        <h4>Βήμα 2</h4>
                        <p>Γράφω τον όρο αναζήτησης μου και πατάω <b class="text-success">Αναζήτηση</b>.</p>
                        <p>O όρος αυτός μπορεί να είναι:</p>
                        <ul>
                            <li>Τίτλος βιβλίου</li>
                            <li>Συγγραφέας</li>
                            <li>ISBN</li>
                            <li>Λέξη κλειδί</li>
                        </ul>
                        
                        <h4>Βήμα 3</h4>
                        <p>Σε περίπτωση που θέλω να περιορίσω τα αποτελέσματα χρησιμοποιώ τα <b>φίλτρα</b> στα αριστερά.</p>
                        <img style="width: 19%; height 14%; margin-left: 5%; " src="images/filter.png" alt="Missing start state image">

                    </div>
                </div>

                <div class="card-header" id="headingPubFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link mr-5 btnState" type="button" data-toggle="collapse" data-target="#collapsePubFour" aria-expanded="false" aria-controls="collapsePubFour">
                            Πώς να επεξεργαστώ το Προφίλ μου?
                        </button>
                        <button style="font-size: 150%;" class="btn btn-link float-right btnState" type="button" data-toggle="collapse" data-target="#collapsePubFour" aria-expanded="true" aria-controls="collapsePubFour">
                            <i class="fas fa-caret-down" id="caret1"></i>
                        </button>
                    </h5>
                </div>

                <div id="collapsePubFour" class="collapse" aria-labelledby="headingPubFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <h2>Υπο κατασκευή</h2>

                    </div>
                </div>
            </div>
            <div style="display: none;" id="secAccord" class="col-6">
                <h2>Υπό Κατασκευή</h2>
            </div>
            <div style="display: none;" id="dianAccord" class="col-6">
                <h2>Υπό Κατασκευή</h2>
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