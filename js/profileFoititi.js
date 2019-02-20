function profileGo(where) {
    window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php";
}

function setActive(id, deactivate1, deactivate2) {

    document.getElementById(id).style.backgroundColor = "green";
    document.getElementById(id).style.borderColor = "green";
    document.getElementById(id).style.borderWidth = "1px";
    
    document.getElementById(deactivate1).style.backgroundColor = "white";
    document.getElementById(deactivate1).style.borderColor = "green";
    document.getElementById(deactivate1).style.borderWidth = "1px";

    document.getElementById(deactivate2).style.backgroundColor = "white";
    document.getElementById(deactivate2).style.borderColor = "green";
    document.getElementById(deactivate2).style.borderWidth = "1px";
}

function activate(id, deactivate1, deactivate2) {
    
    document.getElementById(id).style.backgroundColor = "green";
    document.getElementById(deactivate1).style.backgroundColor = "white";
    document.getElementById(deactivate2).style.backgroundColor = "white";

    if(id == "profileManage") {
        document.getElementById("profContent").style.display = 'block';
        document.getElementById("currentContent").style.display = 'none';
        document.getElementById("historyContent").style.display = 'none';
    }
    else if(id == "current") {
        document.getElementById("profContent").style.display = 'none';
        document.getElementById("currentContent").style.display = 'block';
        document.getElementById("historyContent").style.display = 'none';
    }
    else if(id == "history") {
        document.getElementById("profContent").style.display = 'none';
        document.getElementById("currentContent").style.display = 'none';
        document.getElementById("historyContent").style.display = 'block';
    }
}

function getbooks() {
    window.location.replace("http://localhost/sdi1500048_sdi1500116/getbooks.php");
}

window.onload = function() {
    var url = new URL(window.location.href);
    var c = url.searchParams.get("choice");
    if(c == "curr") {
        setActive('current', 'profileManage', 'history');
        document.getElementById("profileManage").classList.remove("active");
        document.getElementById("current").classList.add("active");

        activate("current", "profileManage", "profContent");
    }
    else if(c == "hist") {
        setActive('history', 'profileManage', 'current');
        document.getElementById("profileManage").classList.remove("active");
        document.getElementById("history").classList.add("active");

        activate("history", "profileManage", "current");
    }
    else {
        setActive('profileManage', 'current', 'history');
    }

    

    if(document.getElementById("selUni").value == 0) {
        document.getElementById("selDep").setAttribute("disabled", true);
    }

}

function handleForm(event) { 
    event.preventDefault(); 
}

function typeUsername(value) {

    document.getElementById("updateSuccess").style.display = 'none';
    document.getElementById("errorUsername").style.display = 'none';

}

function typeNewPass(value) {

    document.getElementById("updateSuccess").style.display = 'none';
    if(value != document.getElementById("passwordVer").value) {

        document.getElementById("errorPassword").style.display = 'block';

    } else {

        document.getElementById("errorPassword").style.display = 'none';

    }
}

function typeNewPassVer(value) {

    document.getElementById("updateSuccess").style.display = 'none';
    if(value != document.getElementById("password").value) {

        document.getElementById("errorPassword").style.display = 'block';

    } else {

        document.getElementById("errorPassword").style.display = 'none';

    }
}

function changeUni(value) {

    document.getElementById("updateSuccess").style.display = 'none';
    if(value == 0) {
        document.getElementById("selDep").setAttribute("disabled", true);
    }
    else {
        document.getElementById("selDep").removeAttribute("disabled");
    }
    document.getElementById("selDep").selectedIndex = 0;

    if(value != 0) {
        
        request = $.ajax({
          url: "servers/profileServer.php",
          type: "post",
          data: {action: 'ShowDeps',
                  uniName: value}
        });
    
        
        request.done(function (response){
          document.getElementById("selDep").innerHTML = '<option id="defDep" onclick="chooseDep(this.value)" value="0" selected>Επίλεξε Τμήμα</option>' + response;
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
    
}

function changeDep(value) {

    document.getElementById("updateSuccess").style.display = 'none';
}


	
function save() {

    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var passVer = document.getElementById('passwordVer').value;
    var uniName = document.getElementById('selUni').value;
    var uniDepart = document.getElementById('selDep').value;

    if(username == '') {

        document.getElementById("errorUsername").style.display = 'block';
        return;
    }
    if(password != passVer) {
        document.getElementById("errorPassword").style.display = 'block';
        return;
    }

    //console.log(uniName + " " + uniDepart);

    request = $.ajax({
        url: "servers/profileServer.php",
        type: "post",
        data: {action: 'UpdateProfile',
                username: username,
                password: password,
                uniName: uniName,
                uniDepart: uniDepart}
    });

    request.done(function (response){
        //console.log(response);
        if(response == 1) {

            document.getElementById("loginUsername").innerHTML = username;
            document.getElementById("password").value = '';
            document.getElementById("passwordVer").value = '';
            document.getElementById("updateSuccess").style.display = 'block';
        }else if(response == 0) {
            console.log('Sth went wrong');
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

