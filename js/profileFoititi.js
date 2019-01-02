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

