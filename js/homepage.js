var selectedInfoCategory = "foititis";

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