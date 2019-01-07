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

$(document).ready(function() {

    $('#example-popover').popover(function(){
        container: 'body'
    
    });
  

  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })

  $('#selYear').prop('selectedIndex',0);
  $("input").val("");
  $("#submitButton").attr("disabled", true);
});


function chooseYear(value) {

	console.log("CHANGED");
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

	document.getElementById("helpBtn2").style.marginTop = "177px";
	document.getElementById("helpBtn1").style.marginTop = "80px";
	document.getElementById("weightError").style.display = 'none';
	$('#helpBtn0').tooltip('hide');
    weightInput = value;
    if (weightInput) {
        console.log("Weight:" + weightInput);
    }
}

function typeDimensions(value) {

	document.getElementById("helpBtn2").style.marginTop = "177px";
	document.getElementById("dimError").style.display = 'none';
	$('#helpBtn1').tooltip('hide');
    dimensionsInput = value;
    if (dimensionsInput) {
        console.log("dimensionsInput:" + dimensionsInput);
    }

}

function typePages(value) {

	document.getElementById("helpBtn2").style.marginTop = "177px";
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
	var regexISBN1 = /^[0-9]{2}\-[0-9]{5}\-[0-9]{2}\-[0-9]{1}$/;

	var regexKeywords = /^(([a-z])*([ ])*([A-Z])*([ ])*([Α-Ω])*([ ])*([α-ω])*([ ])*)*,*$/;
	
	if( regexKeywords.test(keywordsInput)) {

		flag = 1;

	} else {

		document.getElementById("keywordsError").style.display = 'block';
		$('#helpBtn3').tooltip('show');
		flag = 0;
		
	}

	if( regexISBN0.test(ISBNInput) || regexISBN1.test(ISBNInput) ) {

		flag = 1;

	}else {

		document.getElementById("ISBNError").style.display = 'block';
		document.getElementById("aster3").style.marginTop = '100px';
		document.getElementById("aster4").style.marginTop = '90px';
		$('#isbnHelp').tooltip('show');
		flag = 0;
	}

	var regexPriceWeight = /^[0-9]+.[0-9]+$/;
	var regexDim = /^[0-9]+.?([0-9]*)x[0-9]+.?([0-9]*)$/;

	var help0 = 0;
	var help1 = 0;
	var help2 = 0;

	
	
	if(weightInput) {

		if(regexPriceWeight.test(weightInput)) {

			flag = 1;

		} else {
			
			document.getElementById("weightError").style.display = "block";
			document.getElementById("helpBtn1").style.marginTop = "105px";
			document.getElementById("helpBtn2").style.marginTop = "180px";
			$('#helpBtn0').tooltip('show');
			help0 = 1;
			flag = 0;
			
		}
	}

	var regexDim = /^[0-9]+.?([0-9]*)x[0-9]+.?([0-9]*)$/;

	if (dimensionsInput) {

		if(regexDim.test(dimensionsInput)) {

			flag = 1;

		} else {
			
			document.getElementById("dimError").style.display = "block";
			
			$('#helpBtn1').tooltip('show');
			help1 = 1;
			flag = 0;
			if(help0 == 1) {

			 	document.getElementById("helpBtn2").style.marginTop = "205px";
			}else {

				document.getElementById("helpBtn2").style.marginTop = "180px";
			}
		}
	}

	if (pagesInput) {

		if(!(isNaN(pagesInput))) {

			flag = 1;

		} else {
			
			document.getElementById("pagesError").style.display = "block";
			help2 =  1;
			flag = 0;

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

			flag = 1;

		} else {
			
			document.getElementById("priceError").style.display = "block";
			$('#helpBtn2').tooltip('show');
			flag = 0;

			
		}
	}

	if( flag == 1)  {


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
					price: priceInput}
		});



		

	}


	


	
}

