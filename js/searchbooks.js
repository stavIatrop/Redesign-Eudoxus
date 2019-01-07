var checkedPages = null;

var logginedType = -1;

function choosePages(pagesId) {
    checkedPages = pagesId;
}

window.onload = function() {
    document.getElementById("searchInp").value = '';
    document.getElementById("selSem").selectedIndex = 0;
    document.getElementById("selYear").selectedIndex = 0;
    document.getElementById("pag1").checked = false;
    document.getElementById("pag2").checked = false;
    document.getElementById("pag3").checked = false;
    document.getElementById("pag4").checked = false;
    document.getElementById("pag5").checked = false;

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
};

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

function cancelFilter(filterId) {
    if(filterId == "canSem") {
        document.getElementById("selSem").selectedIndex = 0;
    }
    else if (filterId == "canYear"){
        document.getElementById("selYear").selectedIndex = 0;
    }
    else {
        document.getElementById("pag1").checked = false;
        document.getElementById("pag2").checked = false;
        document.getElementById("pag3").checked = false;
        document.getElementById("pag4").checked = false;
        document.getElementById("pag5").checked = false;
        document.getElementById("searchInp").value = '';
    }
}

function search() {

    if(document.getElementById("searchInp").value == '') {
        document.getElementById("searchInp").style.backgroundColor='#ffcccc';
    }
    else {
        document.getElementById("searchList").style.removeProperty("display");
        document.getElementById("searchInp").style.backgroundColor='white';

    }
}