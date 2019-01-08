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
    // var url = new URL(window.location.href);
    // var c = url.searchParams.get("choice");
    // if(c == "curr") {
    //     setActive('current', 'profileManage', 'history');
    //     document.getElementById("profileManage").classList.remove("active");
    //     document.getElementById("current").classList.add("active");

    //     activate("current", "profileManage", "profContent");
    // }
    // else if(c == "hist") {
    //     setActive('history', 'profileManage', 'current');
    //     document.getElementById("profileManage").classList.remove("active");
    //     document.getElementById("history").classList.add("active");

    //     activate("history", "profileManage", "current");
    // }
    // else {
    //     setActive('profileManage', 'current', 'history');
    //     //activate('profileManage', 'current', 'history');
    // }
    setActive('profileManage');

}

