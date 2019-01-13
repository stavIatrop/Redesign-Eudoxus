var titleInput = 0;
var authorsInput = 0;
var ISBNInput = 0;
var publisherInput = 0;
var yearInput = 0;
var keywordsInput = 0;

var weightInput = 0;
var dimensionsInput = 0;
var pagesInput = 0;
var priceInput = 0;

var pdfPreviewInput = 0;
var pdfIndexInput = 0;
var coverInput = 0;

var logginedType = -1;

window.onload = function() {
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

$(document).ready(function() {

	
	request = $.ajax({
		url: "submitBookServer.php",
		type: "post",
		data: {action: 'BookCookie'}
	});

	request.done(function (response){
		
		console.log("RESPONSE:" + response);
		if(response == 1) {

			if(document.getElementById("title").value != "") {
				titleInput = document.getElementById("title").value;
			}
		
			if(document.getElementById("authors").value != "") {
				authorsInput = document.getElementById("authors").value;
			}
		
			if(document.getElementById("ISBN").value != "") {
				ISBNInput = document.getElementById("ISBN").value;
			}
		
			if(document.getElementById("publisher").value != "") {
				publisherInput = document.getElementById("publisher").value;
			}
		
			if(document.getElementById("weight").value != "") {
				weightInput = document.getElementById("weight").value;
			}
		
			if(document.getElementById("dims").value != "") {
				dimensionsInput = document.getElementById("dims").value;
			}
		
			if(document.getElementById("pages").value != "") {
				pagesInput = document.getElementById("pages").value;
			}
		
			if(document.getElementById("price").value != "") {
				priceInput = document.getElementById("price").value;
			}
		
			if(document.getElementById("keywords").value != "") {
				keywordsInput = document.getElementById("keywords").value;
			}
		
			var e = document.getElementById("selYear");
			if(e.options[e.selectedIndex].value != 0) {
				yearInput = e.options[e.selectedIndex].value;
			}

			$("#submitButton").attr("disabled", false);
		  
		} else if(response == 0){
			$('#selYear').prop('selectedIndex',0);
			$("input").val("");
			$("#submitButton").attr("disabled", true);
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


    $('#example-popover').popover(function(){
        container: 'body'
    
    });
  

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

});


function chooseYear(value) {
  	yearInput = value;
  	if (yearInput) {
	  console.log("Year:" + yearInput);
  	}

  	if( yearInput != 0 && titleInput && authorsInput && publisherInput && ISBNInput && keywordsInput) {
    
		console.log("All filled")
		document.getElementById('submitButton').disabled = false;
				
  	} else {

     	document.getElementById('submitButton').disabled = true;
	}

}

function choosePreview(value) {

	pdfPreviewInput = document.getElementById("pdfPreview").files[0].name;
	// var path = document.getElementById("pdfPreview").files[0].path;

  	if (pdfPreviewInput) {
	  console.log("preview:" + pdfPreviewInput );
  	}

}

function chooseIndex(value) {

	pdfIndexInput = value;
	if (pdfIndexInput) {
	console.log("index:" + pdfIndexInput);
	}

}

function chooseCover(value) {

	coverInput = value;
	if (coverInput) {
	console.log("cover:" + coverInput);
	}

}


function typeTitle(value) {

    titleInput = value;
    if (titleInput) {
        console.log("Title:" + titleInput);
    }

    if( yearInput != 0 && titleInput && authorsInput && publisherInput && ISBNInput && keywordsInput ) {
    
		console.log("All filled")
		document.getElementById('submitButton').disabled = false;
				
  	} else {

     	document.getElementById('submitButton').disabled = true;
	}
}

function typeAuthors(value) {

    authorsInput = value;
    if (authorsInput) {
        console.log("Auth:" + authorsInput);
    }

    if( yearInput != 0 && titleInput && authorsInput && publisherInput && ISBNInput && keywordsInput) {
    
		console.log("All filled")
		document.getElementById('submitButton').disabled = false;
				
  	} else {

     	document.getElementById('submitButton').disabled = true;
	}
}

function typePublisher(value) {

    publisherInput = value;
    if (publisherInput) {
        console.log("Pub:" + publisherInput);
    }

    if( yearInput != 0 && titleInput && authorsInput && publisherInput && ISBNInput && keywordsInput) {
    
		console.log("All filled")
		document.getElementById('submitButton').disabled = false;
				
  	} else {

     	document.getElementById('submitButton').disabled = true;
	}
}

function typeWeight(value) {

	if(document.getElementById("dimError").style.display == 'block' && document.getElementById("pagesError").style.display == 'block') {
		
		document.getElementById("helpBtn2").style.marginTop = "230px";

	}else if( document.getElementById("dimError").style.display == 'block' || document.getElementById("pagesError").style.display == 'block') {

		document.getElementById("helpBtn2").style.marginTop = "205px";

	}else {

		document.getElementById("helpBtn2").style.marginTop = "177px";
	}
	// document.getElementById("helpBtn2").style.marginTop = "177px";
	document.getElementById("helpBtn1").style.marginTop = "80px";
	document.getElementById("weightError").style.display = 'none';
	$('#helpBtn0').tooltip('hide');
    weightInput = value;
    if (weightInput) {
        console.log("Weight:" + weightInput);
    }
}

function typeDimensions(value) {

	if(document.getElementById("weightError").style.display == 'block' && document.getElementById("pagesError").style.display == 'block') {
		
		document.getElementById("helpBtn2").style.marginTop = "205px";

	}else if(  document.getElementById("pagesError").style.display == 'block') {

		document.getElementById("helpBtn2").style.marginTop = "205px";

	}else if( document.getElementById("weightError").style.display == 'block') {

		document.getElementById("helpBtn2").style.marginTop = "180px";

	}
	else {

		document.getElementById("helpBtn2").style.marginTop = "177px";
	}
	
	// document.getElementById("helpBtn2").style.marginTop = "177px";
	document.getElementById("dimError").style.display = 'none';
	$('#helpBtn1').tooltip('hide');
    dimensionsInput = value;
    if (dimensionsInput) {
        console.log("dimensionsInput:" + dimensionsInput);
    }

}

function typePages(value) {

	if(document.getElementById("weightError").style.display == 'block' && document.getElementById("dimError").style.display == 'block') {
		
		document.getElementById("helpBtn2").style.marginTop = "205px";

	}else if( document.getElementById("weightError").style.display == 'block' ) {

		document.getElementById("helpBtn2").style.marginTop = "180px";

	}else if (document.getElementById("dimError").style.display == 'block') {

		document.getElementById("helpBtn2").style.marginTop = "205px";
	}
	else {

		document.getElementById("helpBtn2").style.marginTop = "177px";
	}
	
	// document.getElementById("helpBtn2").style.marginTop = "177px";
	document.getElementById("pagesError").style.display = 'none';

	pagesInput = value;
	
	if (pagesInput) {
        console.log("pages:" + pagesInput);
    }

}

function typePrice(value) {

	document.getElementById("priceError").style.display = 'none';
	$('#helpBtn2').tooltip('hide');
    priceInput = value;
    if (priceInput) {
        console.log("price:" + priceInput);
    }
}

function typeISBN(value) {

	document.getElementById("ISBNError").style.display = 'none';
	document.getElementById("aster3").style.marginTop = '75px';
	document.getElementById("aster4").style.marginTop = '87px';
	$('#isbnHelp').tooltip('hide');
    ISBNInput = value;
    if (ISBNInput) {
        console.log("ISBN:" + ISBNInput);
    }

    if( yearInput != 0 && titleInput && authorsInput && publisherInput && ISBNInput && keywordsInput) {
    
		console.log("All filled")
		document.getElementById('submitButton').disabled = false;
				
  	} else {

     	document.getElementById('submitButton').disabled = true;
	}
}


function typeKeywords(value) {

	document.getElementById("keywordsError").style.display = 'none';
	$('#helpBtn3').tooltip('hide');
    keywordsInput = value;
    if (keywordsInput) {
        console.log("Keywords:" + keywordsInput);
    }

    if( yearInput != 0 && titleInput && authorsInput && publisherInput && ISBNInput && keywordsInput ) {
    
		console.log("All filled")
		document.getElementById('submitButton').disabled = false;
				
  	} else {

     	document.getElementById('submitButton').disabled = true;
	}
}

function handleForm(event) { 
    event.preventDefault(); 
}

function submitBk() {

	var form = document.getElementById("descForm");
	form.addEventListener('submit', handleForm);
	
	
	var flag = 0;
	var regexISBN0 = /^[0-9]{2}\-[0-9]{5}\-[0-9]{2}\-[0-9]{1}$/;
	var regexISBN1 = /^[0-9]{3}\-[0-9]{3}\-[0-9]{3}\-[0-9]{3}\-[0-9]{1}$/;

	//var regexKeywords = /^(([a-z]|[A-Z]|[Α-Ω]|[Ά-Ώ]|[α-ω]|[ά-ώ])(([ ])*([a-z])*([ ])*([A-Z])*([ ])*([Α-Ω])*([ ])*([Ά-Ώ])*([ ])*([α-ω])*([ ])*([ά-ώ])*([ ])*),)*([a-z]|[A-Z]|[Α-Ω]|[Ά-Ώ]|[α-ω]|[ά-ώ])(([ ])*([a-z])*([ ])*([A-Z])*([ ])*([Α-Ω])*([ ])*([Ά-Ώ])*([ ])*([α-ω])*([ ])*([ά-ώ])*([ ])*)$/;
	//var regexKeywords = /^[a-zA-Z0-9](,([a-zA-Z0-9])*([a-zA-Z0-9]))*$/;
	var regexKeywords = /[^,\s][^\,]*[^,\s]/;
	if( regexKeywords.test(keywordsInput)) {

		;//flag = 1;

	} else {
		console.log(keywordsInput);
		document.getElementById("keywordsError").style.display = 'block';
		$('#helpBtn3').tooltip('show');
		flag = +1;
		
	}

	if( regexISBN0.test(ISBNInput) || regexISBN1.test(ISBNInput) ) {

		;//flag = 1;

	}else {

		document.getElementById("ISBNError").style.display = 'block';
		document.getElementById("aster3").style.marginTop = '100px';
		document.getElementById("aster4").style.marginTop = '90px';
		$('#isbnHelp').tooltip('show');
		flag += 1;
	}

	var regexPriceWeight = /^[0-9]+.[0-9]+$/;
	var regexDim = /^[0-9]+.?([0-9]*)x[0-9]+.?([0-9]*)$/;

	var help0 = 0;
	var help1 = 0;
	var help2 = 0;

	
	
	if(weightInput) {

		if(regexPriceWeight.test(weightInput)) {

			;//flag = 1;

		} else {
			
			document.getElementById("weightError").style.display = "block";
			document.getElementById("helpBtn1").style.marginTop = "105px";
			document.getElementById("helpBtn2").style.marginTop = "180px";
			$('#helpBtn0').tooltip('show');
			help0 = 1;
			flag += 1;
			
		}
	}

	var regexDim = /^[0-9]+.?([0-9]*)x[0-9]+.?([0-9]*)$/;

	if (dimensionsInput) {

		if(regexDim.test(dimensionsInput)) {

			;//flag = 1;

		} else {
			
			document.getElementById("dimError").style.display = "block";
			
			$('#helpBtn1').tooltip('show');
			help1 = 1;
			flag += 1;
			if(help0 == 1) {

			 	document.getElementById("helpBtn2").style.marginTop = "205px";
			}else {

				document.getElementById("helpBtn2").style.marginTop = "180px";
			}
		}
	}

	if (pagesInput) {

		if(!(isNaN(pagesInput))) {

			;//flag = 1;

		} else {
			
			document.getElementById("pagesError").style.display = "block";
			help2 =  1;
			flag += 1;

			if(help0 == 1 && help1 == 1) {
				
				document.getElementById("helpBtn2").style.marginTop = "230px";

			} else if (help0 == 1 || help1 == 1) {

				document.getElementById("helpBtn2").style.marginTop = "205px";
			} else {

				document.getElementById("helpBtn2").style.marginTop = "180px";
			}
			
		}
	}

	if(priceInput) {

		if(regexPriceWeight.test(priceInput)) {

			;//flag = 1;

		} else {
			
			document.getElementById("priceError").style.display = "block";
			$('#helpBtn2').tooltip('show');
			flag += 1;

			
		}
	}

	if( flag == 0)  {

		console.log("HE");
		request = $.ajax({
            url: "submitBookServer.php",
            type: "post",
            data: {action: 'SubmitBook',
					title: titleInput, 
					authors: authorsInput,
					ISBN: ISBNInput,
					publisher: publisherInput,
					year: yearInput,
					keywords: keywordsInput,
					weight: weightInput,
					dimensions: dimensionsInput,
					pages: pagesInput,
					price: priceInput,
					preview: pdfPreviewInput,
					index: pdfIndexInput,
					cover: coverInput}
		});

		request.done(function (response){
			console.log("RESPONSE:" + response);
			if(response == -2) {

				document.getElementById("userError").style.display = 'block';
			  
			} else if(response == -1){

				//something went wrong with record addition
				console.log("Something went wrong");
			}else if (response == 0) {

				window.location.replace("http://localhost/sdi1500048_sdi1500116/regLogin.php?msg=notSubmit");

			}else if (response == 1) {

				document.getElementById('submitSuccess').style.display = 'block';
				document.getElementById('selYear').value = 0;
				document.getElementById('title').value = '';
				document.getElementById('authors').value = '';
				document.getElementById('ISBN').value = '';
				document.getElementById('publisher').value = '';
				document.getElementById('weight').value = '';
				document.getElementById('dims').value = '';
				document.getElementById('pages').value = '';
				document.getElementById('price').value = '';
				document.getElementById('keywords').value = '';
				document.getElementById('pdfPreview').value = '';
				document.getElementById('pdfIndex').value = '';
				document.getElementById('pdfCover').value = '';
				document.getElementById('submitButton').disabled = true; 
				
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

		

	}


	


	
}

