
function chooseUni(val) {
  if(val == 0) {
    document.getElementById("selDep").setAttribute("disabled", true);
  }
  else {
    document.getElementById("selDep").removeAttribute("disabled");
  }
  document.getElementById("selDep").selectedIndex = 0;
  document.getElementById("selSem").selectedIndex = 0;
  document.getElementById("selCourse").selectedIndex = 0;

  document.getElementById("selSem").setAttribute("disabled", true);
  document.getElementById("selCourse").setAttribute("disabled", true);
  document.getElementById("showBooks").style.display = 'none';

  if(val != 0) {
               
    request = $.ajax({
      url: "getbooksServer.php",
      type: "post",
      data: {action: 'UpdateDeps',
              uni: val}
    });

    console.log("reach");
    request.done(function (response){
      // Log a message to the console
      console.log("RESPONSE WAS: " + response);
      //$("#depOptions").html("aaaaaaaaaa");
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

function chooseDep(val) {
  if(val==0) {
    document.getElementById("selSem").setAttribute("disabled", true);
  }
  else {
    document.getElementById("selSem").removeAttribute("disabled");
    document.getElementById("semCourseRow").style.removeProperty("visibility");

  }

  document.getElementById("selSem").selectedIndex = 0;
  document.getElementById("selCourse").selectedIndex = 0;

  document.getElementById("selCourse").setAttribute("disabled", true);
  document.getElementById("showBooks").style.display = 'none';
}

function chooseSem(val) {
  if(val==0) {
    document.getElementById("selCourse").setAttribute("disabled", true);
  }
  else {
    document.getElementById("selCourse").removeAttribute("disabled");
  }

  document.getElementById("showBooks").style.display = 'none';
  document.getElementById("selCourse").selectedIndex = 0;
}

function chooseCourse(val) {
  if(val==0) {
    document.getElementById("showBooks").style.display = 'none';
  }
  else {
    document.getElementById("showBooks").style.display = 'block';
  }
}

window.onload = function() {
  document.getElementById("selUni").selectedIndex = 0;
  document.getElementById("selDep").selectedIndex = 0;
  document.getElementById("selSem").selectedIndex = 0;
  document.getElementById("selCourse").selectedIndex = 0;
  document.getElementById("selDep").disabled = true;
  document.getElementById("selSem").disabled = true;
  document.getElementById("selCourse").disabled = true;
};
// $(document).ready(function(){
//   $("#hide").click(function(){
//     $("p").hide();
//   });
// });