// var disFoit = 0;
// var helpDhl = 0;
// var helpAccount = 0;
// var help = 0;

// var disEkdot = 0;
// var helpKata = 0;
// var helpAccountEkdot = 0;

// var disGram = 0;
// var helpPro = 0;
// var helpAccountGram = 0;

var logginedType = -1;

var openHelp = "";
var openAccord = "";

window.onload = function() {
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

$(document).ready(function() {
    var url = new URL(window.location.href);
    var c = url.searchParams.get("who");
    if(c == "stud") {
        activateHelp("helpFoit", "foitAccord");
    }
    else if (c == "pub") {
        activateHelp("helpEkd", "pubAccord");
    }
});

function profileGo(where) {
    if(where == "prof") {
        if(logginedType == 1) {
            window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php";
        }
        else if(logginedType == 2) {
            window.location.href = "http://localhost/sdi1500048_sdi1500116/profileEkdoti.php";
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

function activateHelp(idAcitvated, accordActivated) {
    if(idAcitvated == openHelp) {
        return;
    }

    if(openHelp != "") {
        document.getElementById(openHelp).classList.remove("active");
        document.getElementById(openAccord).style.display = "none";
    }

    openHelp = idAcitvated;
    document.getElementById(idAcitvated).classList.add("active");

    openAccord = accordActivated;
    document.getElementById(openAccord).style.display = "block";
}
