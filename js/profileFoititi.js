function setActive(id, deactivate1, deactivate2, deactivate3 ) {

    document.getElementById(id).style.backgroundColor = "green";
    document.getElementById(id).style.borderColor = "green";
    document.getElementById(id).style.borderWidth = "1px";
    
    document.getElementById(deactivate1).style.backgroundColor = "white";
    document.getElementById(deactivate1).style.borderColor = "green";
    document.getElementById(deactivate1).style.borderWidth = "1px";

    document.getElementById(deactivate2).style.backgroundColor = "white";
    document.getElementById(deactivate2).style.borderColor = "green";
    document.getElementById(deactivate2).style.borderWidth = "1px";

    document.getElementById(deactivate3).style.backgroundColor = "white";
    document.getElementById(deactivate3).style.borderColor = "green";
    document.getElementById(deactivate3).style.borderWidth = "1px";
}
function activate(id, deactivate1, deactivate2, deactivate3 ) {
    
    document.getElementById(id).style.backgroundColor = "green";
    document.getElementById(deactivate1).style.backgroundColor = "white";
    document.getElementById(deactivate2).style.backgroundColor = "white";
    document.getElementById(deactivate3).style.backgroundColor = "white";
}