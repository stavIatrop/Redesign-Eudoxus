function profileGo(where) {
    window.location.href = "http://localhost/sdi1500048_sdi1500116/profileEkdoti.php";
}

function setActive(id) {

    document.getElementById(id).style.backgroundColor = "green";
    document.getElementById(id).style.borderColor = "green";
    document.getElementById(id).style.borderWidth = "1px";
}

function activate(id) {
    
    document.getElementById(id).style.backgroundColor = "green";

    if(id == "profileManage") {
        document.getElementById("profContent").style.display = 'block';
    }

}

function getbooks() {
    window.location.replace("http://localhost/sdi1500048_sdi1500116/getbooks.php");
}

window.onload = function() {
    setActive('profileManage');

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

function save() {

    
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var passVer = document.getElementById('passwordVer').value;

    if(username == '') {

        document.getElementById("errorUsername").style.display = 'block';
        return;
    }
    if(password != passVer) {
        document.getElementById("errorPassword").style.display = 'block';
        return;
    }


    request = $.ajax({
        url: "servers/profileEkdotServer.php",
        type: "post",
        data: {action: 'UpdateProfileEkdot',
                username: username,
                password: password,
                }
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


