// window.onload = function() {
//     document.getElementById("selUni").selectedIndex = 0;
//     document.getElementById("selDep").selectedIndex = 0;
//     document.getElementById("selSem").selectedIndex = 0;
//     document.getElementById("selCourse").selectedIndex = 0;
//   };

var selCat = 0;
var selUsername = 0;
var selEmail = 0;
var selPassword = 0;
var selPassVer = 0;
var selCatId = 0;

var emailLog = 0;
var passLog = 0;

var logginedType = -1;

window.onload = function(){
    request = $.ajax({
        url: "getbooksServer.php",
        type: "post",
        data: {action: 'UserType'}
      });

      request.done(function (response){
        logginedType =  response; 
      });
    
      request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
      });
}

function profileGo(where) {
    if(where == "prof") {
        if(logginedType == 1) {
            window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php";
        }
        else if(logginedType == 2) {
            window.location.href = "#";
        }
        else {
            window.location.href = "http://localhost/sdi1500048_sdi1500116/regLogin.php";
        }
    }
    else if(logginedType != 1) {
        window.location.href = "http://localhost/sdi1500048_sdi1500116/regLogin.php";
    }
    else {
        if(where == "curr") {
            window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php?choice=curr";
        }
        else if(where == "hist") {
            window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php?choice=hist";
        }
    }
}

$(document).ready(function(){

    $("input").val("");
    $('#selCateg').prop('selectedIndex',0);

    $("#selCateg").change(function(){
        var selInd = $("#selCateg").prop('selectedIndex');
        if(selInd == 0) {
            $("#studNumb").hide();
            $("#publNumb").hide();
        }
        else if(selInd == 1) {
            $("#studNumb").show();
            $("#publNumb").hide();
        }
        else {
            $("#studNumb").hide();
            $("#publNumb").show();
        }
    });

    $('#loginForm input').change(function() { 
        somethingChanged = true; 
   }); 
});



function selectCategory(value) {

    selCat = value;
    if (selCat) {
        console.log("Cat:" + selCat);
    }

    if( selCat != 0 && selCatId && selUsername && selEmail && selPassword && selPassVer ) {
        console.log("All filled");

        if ( selPassword === selPassVer ) {
            console.log("All filled And Pass");
            document.getElementById('regButton').disabled = false;
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            document.getElementById('regButton').disabled = true;
        }

    } else {

        document.getElementById('regButton').disabled = true;
        if ( selPassword === selPassVer ) {
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            
        }
    }

}

function typeUsername(value) {

    selUsername = value;
    if (selUsername) {
        console.log("Usr:" + selUsername);
    }

    if( selCat != 0 && selCatId && selUsername && selEmail && selPassword && selPassVer ) {
        console.log("All filled");

        if ( selPassword === selPassVer ) {
            console.log("All filled And Pass");
            document.getElementById('regButton').disabled = false;
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            document.getElementById('regButton').disabled = true;
        }

    } else {

        document.getElementById('regButton').disabled = true;
        if ( selPassword === selPassVer ) {
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            
        }
    }
}

function typeEmail(value) {

    document.getElementById("emailError").style.display = 'none';
    selEmail = value;
    if (selEmail) {
        console.log("Email:" + selEmail);
    }

    if( selCat != 0 && selCatId && selUsername && selEmail && selPassword && selPassVer ) {
        console.log("All filled");

        if ( selPassword === selPassVer ) {
            console.log("All filled And Pass");
            document.getElementById('regButton').disabled = false;
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            document.getElementById('regButton').disabled = true;
        }

    } else {

        document.getElementById('regButton').disabled = true;
        if ( selPassword === selPassVer ) {
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            
        }
    }
}

function typePassword(value) {

    selPassword = value;
    if (selPassword) {
        console.log("Pass:" + selPassword);
    }

    if( selCat != 0 && selCatId && selUsername && selEmail && selPassword && selPassVer ) {
        console.log("All filled");

        if ( selPassword === selPassVer ) {
            console.log("All filled And Pass");
            document.getElementById('regButton').disabled = false;
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            document.getElementById('regButton').disabled = true;
        }

    } else {

        document.getElementById('regButton').disabled = true;
        if ( selPassword === selPassVer ) {
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            
        }
    }
}

function typePassVer(value) {

    selPassVer = value;
    if (selPassVer) {
        console.log("PassVer:" + selPassVer);
    }

    if( selCat != 0 && selCatId && selUsername && selEmail && selPassword && selPassVer ) {
        console.log("All filled");

        if ( selPassword === selPassVer ) {
            console.log("All filled And Pass");
            document.getElementById('regButton').disabled = false;
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            document.getElementById('regButton').disabled = true;
        }

    } else {

        document.getElementById('regButton').disabled = true;
        if ( selPassword === selPassVer ) {
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            
        }
    }
}

function typeCatId(value) {

    selCatId = value;
    if (selCatId) {
        console.log("CatId:" + selCatId);
    }


    if( selCat != 0 && selCatId && selUsername && selEmail && selPassword && selPassVer ) {
        
        if ( selPassword === selPassVer ) {
            
            document.getElementById('regButton').disabled = false;
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            document.getElementById('regButton').disabled = true;
        }

    } else {

        document.getElementById('regButton').disabled = true;
        if ( selPassword === selPassVer ) {
            document.getElementById('notPassVer').style.display = 'none';
        } else {

            document.getElementById('notPassVer').style.display = 'block';
            
        }
    }
}
  

function handleForm(event) { 
    event.preventDefault(); 
}
  

function register() {

    filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (filter.test(selEmail)) {
      
        var form = document.getElementById("myForm");
        form.addEventListener('submit', handleForm);

        request = $.ajax({
            url: "register.php",
            type: "post",
            data: {action: 'CheckEmail',
                    email: selEmail}
        });

        request.done(function (response){
            
            console.log("RESPONSE WAS: " + response);
            
            if(response == 1) { 
            
                document.getElementById("emailError").style.display = 'block';
            } else {

                request = $.ajax({
                    url: "register.php",
                    type: "post",
                    data: {action: 'Register',
                            email: selEmail,
                            username: selUsername,
                            password: selPassword,
                            category: selCat,
                            categoryId: selCatId}
                });

                request.done(function(response){

                    console.log("RESPONSE WAS: " + response);

                    if(response == 1) {

                        document.getElementById('regSuccess').style.display = 'block';
                        document.getElementById('selCateg').value = 0;
                        document.getElementById('userName').value = '';
                        document.getElementById('eMail').value = '';
                        document.getElementById('pass').value = '';
                        document.getElementById('passVer').value = '';
                        document.getElementById('catId').value = '';
                        document.getElementById('catIdEkdot').value = '';
                        $("#studNumb").hide();
                        $("#publNumb").hide();
                        console.log("NAIII");
                        

                    } else {

                        console.log("Something went wrong!");
                    }
                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown){
                // Log the error to the console
                    console.error(
                    "The following error occurred: "+
                    textStatus, errorThrown
                    );
                });
                
            }
        });
      
          // Callback handler that will be called on failure
        request.fail(function (jqXHR, textStatus, errorThrown){
              // Log the error to the console
            console.error(
                "The following error occurred: "+
                textStatus, errorThrown
            );
        });

        return true;
    }
    else{
        
        var form = document.getElementById("myForm");
        form.addEventListener('submit', handleForm);
        
        return false;
    }    
}

function typeEmailLog(value) {

    emailLog = value;
    if (emailLog) {
        console.log("Usr:" + emailLog);
    }

    if( emailLog !=0 && passLog != 0 ) {
        
        document.getElementById('logButton').disabled = false;
        document.getElementById('notPassLog').style.display = 'none';
        document.getElementById('emailLogError').style.display = 'none';
            
    } else {
        
        // if(emailLog != 0) {

        //     document.getElementById('notPassLog').style.display = 'block';
        //     document.getElementById('emailLogError').style.display = 'none';

        // }else if (passLog != 0) {
            
        //     document.getElementById('notPassLog').style.display = 'none';
        //     document.getElementById('emailLogError').style.display = 'block';
           
        // } else {

        //     document.getElementById('notPassLog').style.display = 'block';
        //     document.getElementById('emailLogError').style.display = 'block';
        // }

        document.getElementById('logButton').disabled = true;
    }
}

function typePasswordLog(value) {

    document.getElementById('authError').style.display = 'none';
    passLog = value;
    if (passLog) {
        console.log("Pass:" + passLog);
    }

    if( emailLog !=0 && passLog != 0 ) {
        
        document.getElementById('logButton').disabled = false;
        document.getElementById('notPassLog').style.display = 'none';
        document.getElementById('emailLogError').style.display = 'none';
            
    } else {
        
        // if(emailLog != 0) {

        //     document.getElementById('emailLogError').style.display = 'none';
        //     document.getElementById('notPassLog').style.display = 'block';

        // }else if (passLog != 0) {
            
        //     document.getElementById('notPassLog').style.display = 'none';
        //     document.getElementById('emailLogError').style.display = 'block';
  
        // } else {

        //     document.getElementById('notPassLog').style.display = 'block';
        //     document.getElementById('emailLogError').style.display = 'block';
        // }

        document.getElementById('logButton').disabled = true;
    }
}

function login() {

    var form = document.getElementById("loginForm");
    form.addEventListener('submit', handleForm);

    request = $.ajax({
        url: "loginServer.php",
        type: "post",
        data: {action: 'AuthUser',
                email: emailLog,
                password: passLog}
    });

    request.done(function(response){

        console.log("RESPONSE WAS: " + response);

        if(response == 1) {

            console.log("NAIII");

            location.href = 'index.php';

            

        } else {

            console.log("OXI");
            document.getElementById('authError').style.display = 'block';
            document.getElementById('passLog').value = '';

        }
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
    // Log the error to the console
        console.error(
        "The following error occurred: "+
        textStatus, errorThrown
        );
    });
}