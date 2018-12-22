// window.onload = function() {
//     document.getElementById("selUni").selectedIndex = 0;
//     document.getElementById("selDep").selectedIndex = 0;
//     document.getElementById("selSem").selectedIndex = 0;
//     document.getElementById("selCourse").selectedIndex = 0;
//   };

$(document).ready(function(){

    $("input").val("");
    $('#selCateg').prop('selectedIndex',0);

    $("#selCateg").change(function(){
        var selInd = $("#selCateg").prop('selectedIndex');
        if(selInd == 0) {
            $("#studNumb").hide();
            $("#publNumb").hide();
        }
        else if(selInd == 1) {
            $("#studNumb").show();
            $("#publNumb").hide();
        }
        else {
            $("#studNumb").hide();
            $("#publNumb").show();
        }
    });
});