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


function logout() {

  request = $.ajax({
    url: "servers/loginServer.php",
    type: "post",
    data: {action: 'Logout'}
  });

  request.done(function (response){
    
    window.location.replace("http://localhost/sdi1500048_sdi1500116/regLogin.php");
  });

  request.fail(function (jqXHR, textStatus, errorThrown){
    // Log the error to the console
        console.error(
        "The following error occurred: "+
        textStatus, errorThrown
        );
    });

}