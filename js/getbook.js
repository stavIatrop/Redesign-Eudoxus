
var logginedType = -1;

window.onload = function() {
  document.getElementById("selUni").selectedIndex = 0;
  document.getElementById("selDep").selectedIndex = 0;
  document.getElementById("selSem").selectedIndex = 0;
  document.getElementById("selCourse").selectedIndex = 0;
  document.getElementById("selDep").disabled = true;
  document.getElementById("selSem").disabled = true;
  document.getElementById("selCourse").disabled = true;

  request = $.ajax({
    url: "getbooksServer.php",
    type: "post",
    data: {action: 'UserType'}
  });

  request.done(function (response){
    logginedType =  response; 
  });

  request.fail(function (jqXHR, textStatus, errorThrown){
    console.error(
        "The following error occurred: "+
        textStatus, errorThrown
    );
  });
};

$( document ).ready(function() {
  submitStateButton();
});

function submitStateButton() {
  request = $.ajax({
    url: "getbooksServer.php",
    type: "post",
    data: {action: 'isStateCookieEmpty'}
  });

  //console.log("reach");
  request.done(function (response){
    // Log a message to the console
    if(response == 0) {
      document.getElementById("SubmitState").innerHTML = '<button onclick="completeStatement()" style="box-shadow: 2px 2px 3px rgb(112, 111, 111); margin-left:35%; margin-top:2%; margin-bottom:10%;" class="btn btn-lg btn-primary">Ολοκλήρωση</button>';
    }
    else {
      document.getElementById("SubmitState").innerHTML = '<button disabled onclick="completeStatement()" style="box-shadow: 2px 2px 3px rgb(112, 111, 111); margin-left:35%; margin-top:2%; margin-bottom:10%;" class="btn btn-lg btn-primary">Ολοκλήρωση</button>';
    }
    //$("#depOptions").html("aaaaaaaaaa");
    
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

    //console.log("reach");
    request.done(function (response){
      // Log a message to the console
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

  if(val != 0) {

    var selectedUni = document.getElementById("selUni");
    var selectedDep = document.getElementById("selDep");
    //var selectedSem = document.getElementById("selSem");
    var valUni = selectedUni.options[selectedUni.selectedIndex].value;
    var valDep = selectedDep.options[selectedDep.selectedIndex].value;
    //var valSem = selectedSem.options[selectedSem.selectedIndex].value;

    request = $.ajax({
      url: "getbooksServer.php",
      type: "post",
      data: {action: 'UpdateCourses',
              uni: valUni,
              dep: valDep,
              sem: val}
    });

    //console.log("reach");
    request.done(function (response){
      // Log a message to the console
      //$("#depOptions").html("aaaaaaaaaa");
      document.getElementById("selCourse").innerHTML = '<option id="defCourse" onclick="chooseCourse(this.value)" value="0" selected>Επίλεξε Μάθημα</option>' + response;
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


function chooseCourse(val) {
  if(val==0) {
    document.getElementById("showBooks").style.display = 'none';
  }
  else {
    document.getElementById("showBooks").style.display = 'block';
  }

  if(val != 0) {
    request = $.ajax({
      url: "getbooksServer.php",
      type: "post",
      data: {action: 'ShowBooks',
              course: val}
    });

    request.done(function (response){
      // Log a message to the console
      //console.log("RESPONSE WAS: " + response);
      //$("#depOptions").html("aaaaaaaaaa");
      document.getElementById("showBooksList").innerHTML = response;
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

function addBook(bookId) {
  var selectedCourse = document.getElementById("selCourse");
  //var selectedSem = document.getElementById("selSem");
  var valCourse = selectedCourse.options[selectedCourse.selectedIndex].value;

  request = $.ajax({
    url: "getbooksServer.php",
    type: "post",
    data: {action: 'AddBook',
            course: valCourse,
            book: bookId}
  });

  //console.log("reach");
  request.done(function (response){
    // Log a message to the console
    //$("#depOptions").html("aaaaaaaaaa");
    document.getElementById("statedBooksList").innerHTML = response;
    var counter = 0;
    var button  = document.getElementById( "addButton" + counter);
    while(button) {
      if(button.value == bookId) {
        button.classList.remove("btn-success");
        button.classList.add("btn-danger");
        button.innerHTML = "Αφαίρεση"
        button.onclick = function() { removeBook(this.value); }
      }
      else {
        button.setAttribute("disabled", "");
      }
      counter++;
      button  = document.getElementById( "addButton" + counter);
    }
    submitStateButton();
    // request = $.ajax({
    //   url: "getbooksServer.php",
    //   type: "post",
    //   data: {action: 'RefreshCookie'}
    // });

    // request.done(function (response){
    //   // Log a message to the console
    //   //console.log("RESPONSE WAS: " + response);
    //   //$("#depOptions").html("aaaaaaaaaa");
    //   console.log("Refreshed");
    // });

    // // Callback handler that will be called on failure
    // request.fail(function (jqXHR, textStatus, errorThrown){
    //   // Log the error to the console
    //   console.error(
    //       "The following error occurred: "+
    //       textStatus, errorThrown
    //   );
    // });

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

function deleteStatedBook(courseId) {
  //console.log(courseId);
  request = $.ajax({
    url: "getbooksServer.php",
    type: "post",
    data: {action: 'DeleteStatedBook',
            course: courseId}
  });
  var selectedCourse = document.getElementById("selCourse");
  var valSelectedCourse = selectedCourse.options[selectedCourse.selectedIndex].value;
  if(valSelectedCourse == courseId) {
    var counter = 0;
    var button  = document.getElementById( "addButton" + counter);
    while(button) {
      //console.log("aaa");
      //if(button.value == bookId) {
        button.classList.remove("btn-danger");
        button.removeAttribute("disabled");
        button.classList.add("btn-success");
        button.innerHTML = "Προσθήκη"
        button.onclick = function() { addBook(this.value); }
     // }
      //else {
      //  button.removeAttribute("disabled");
     // }
      counter++;
      button  = document.getElementById( "addButton" + counter);
    }
  }
  request.done(function (response){
    // Log a message to the console
    //$("#depOptions").html("aaaaaaaaaa");

    document.getElementById("statedBooksList").innerHTML = response;

    submitStateButton();

    
    // request2 = $.ajax({
    //   url: "getbooksServer.php",
    //   type: "post",
    //   data: {action: 'DeleteStatedBook',
    //           course: courseId}
    // });
    // request2.done(function (response){
    //   // Log a message to the console
    //   console.log("RESPONSE WAS: " + response);
    //   //$("#depOptions").html("aaaaaaaaaa");
    //   console.log("REAACH");
  
    //   document.getElementById("statedBooksList").innerHTML = response;
    //   submitStateButton();
    // });
  
    // // Callback handler that will be called on failure
    // request2.fail(function (jqXHR, textStatus, errorThrown){
    //   // Log the error to the console
    //   console.error(
    //       "The following error occurred: "+
    //       textStatus, errorThrown
    //   );
    // });

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

function completeStatement() {
  
  if(logginedType == 0 || logginedType == 2) {
    window.location.replace("http://localhost/sdi1500048_sdi1500116/regLogin.php?msg=notGet");
    return;
  }

  request = $.ajax({
    url: "getbooksServer.php",
    type: "post",
    data: {action: 'CompleteStatement'}
  });

  request.done(function (response){
    // Log a message to the console
    //console.log("RESPONSE WAS: " + response);
    //$("#depOptions").html("aaaaaaaaaa");
    if(response == 1) {
      //window.location.replace("http://localhost/sdi1500048_sdi1500116/profileFoititi.php");
      window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php?choice=curr";
    }
    else if(response == -1){
      window.location.replace("http://localhost/sdi1500048_sdi1500116/regLogin.php");
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

  //TO DO
}

function removeBook(bookId) {
  var selectedCourse = document.getElementById("selCourse");
  var valCourse = selectedCourse.options[selectedCourse.selectedIndex].value;

  deleteStatedBook(valCourse);
}

function profileGo(where) {
  if(where == "prof") {
      if(logginedType == 1) {
          window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php";
      }
      else if(logginedType == 2) {
          window.location.href = "http://localhost/sdi1500048_sdi1500116/profileEkdoti.php";
      }
      else {
          window.location.href = "http://localhost/sdi1500048_sdi1500116/regLogin.php";
      }
  }
  else if(logginedType != 1) {
      window.location.href = "http://localhost/sdi1500048_sdi1500116/regLogin.php";
  }
  else {
      if(where == "curr") {
          window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php?choice=curr";
      }
      else if(where == "hist") {
          window.location.href = "http://localhost/sdi1500048_sdi1500116/profileFoititi.php?choice=hist";
      }
  }
}



// $(document).ready(function(){
//   $("#hide").click(function(){
//     $("p").hide();
//   });
// });