var checkedPages = null;

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
};

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
        document.getElementById("searchList").style.removeProperty("visibility");
        document.getElementById("searchInp").style.backgroundColor='white';

    }
}