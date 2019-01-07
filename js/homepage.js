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