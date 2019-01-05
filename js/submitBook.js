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

	document.getElementById("weightError").style.display = 'none';
	
    weightInput = value;
    if (weightInput) {
        console.log("Weight:" + weightInput);
    }
}

function typeDimensions(value) {

	document.getElementById("dimError").style.display = 'none';
	
    dimensionsInput = value;
    if (dimensionsInput) {
        console.log("dimensionsInput:" + dimensionsInput);
    }

}

function typePages(value) {

    pagesInput = value;
    if (pagesInput) {
        console.log("pages:" + pagesInput);
    }

}

function typePrice(value) {

	document.getElementById("priceError").style.display = 'none';

    priceInput = value;
    if (priceInput) {
        console.log("price:" + priceInput);
    }
}

function typeISBN(value) {

	document.getElementById("ISBNError").style.display = 'none';
	document.getElementById("aster3").style.marginTop = '75px';
	document.getElementById("aster4").style.marginTop = '87px';
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

	var regexISBN0 = /^[0-9]{2}\-[0-9]{5}\-[0-9]{2}\-[0-9]{1}$/;
	var regexISBN1 = /^[0-9]{2}\-[0-9]{5}\-[0-9]{2}\-[0-9]{1}$/;

	if( regexISBN0.test(ISBNInput) || regexISBN1.test(ISBNInput) ) {

		

	}else {

		document.getElementById("ISBNError").style.display = 'block';
		document.getElementById("aster3").style.marginTop = '100px';
		document.getElementById("aster4").style.marginTop = '90px';
		
	}

	var regexPriceWeight = /^[0-9]+.[0-9]+$/;
	var regexDim = /^[0-9]+.?([0-9]*)x[0-9]+.?([0-9]*)$/;

	if(priceInput != 0) {

		if(regexPriceWeight.test(priceInput)) {

			console.log("NAIIII");
		} else {
			
			document.getElementById("priceError").style.display = "block";
		}

	}
}

