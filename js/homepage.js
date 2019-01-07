var selectedInfoCategory = "foititis";

var logginedType = -1;
window.onload = function() {
    request = $.ajax({
        url: "getbooksServer.php",
        type: "post",
        data: {action: 'UserType'}
      });

      request.done(function (response){
        logginedType =  response;
        console.log(logginedType);
      });
    
      request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
      });
}

function selectInfo(clickedId) {
    //if(selectedInfoCategory != 0) {
    document.getElementById(selectedInfoCategory).classList.remove("active");
    document.getElementById(selectedInfoCategory.concat("Info")).style.display='none';
    //}
    /*else {
        document.getElementById("defaultInfo").style.display='none';
    }*/
    selectedInfoCategory = clickedId;
    clickedElemBut = document.getElementById(selectedInfoCategory);
    clickedElemInfo = document.getElementById(selectedInfoCategory.concat("Info"));

    clickedElemBut.classList.add("active");
    clickedElemInfo.style.display = null;
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