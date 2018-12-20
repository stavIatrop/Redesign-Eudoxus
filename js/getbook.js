window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

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
};
// $(document).ready(function(){
//   $("#hide").click(function(){
//     $("p").hide();
//   });
// });