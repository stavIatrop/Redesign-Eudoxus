var disFoit = 0;
var helpDhl = 0;
var helpAccount = 0;
var help = 0;


var disEkdot = 0;
var helpKata = 0;
var helpAccountEkdot = 0;


//gia ton Foititi
function showSubMenuFoit() {

    
    if(disFoit == 0) {
        
        disFoit = 1;
        document.getElementById('subListFoit').style.display = 'block';
        document.getElementById('foititoLink').style.color = 'rgb(25, 88, 23)';


    }else {

        disFoit = 0;
        document.getElementById('subListFoit').style.display = 'none';
        document.getElementById('foititoLink').style.color = 'black';
        document.getElementById('helpFoit1').style.color = 'black';
        document.getElementById('helpFoit2').style.color = 'black';
        document.getElementById('helpFoit3').style.color = 'black';
        
    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';

    }

    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';

    }

    if (helpKata == 1) {
        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';
        document.getElementById('helpEkdot1').style.color = 'black';
    }

    if(helpAccountEkdot == 1) {
        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
        document.getElementById('helpEkdot2').style.color = 'black';
    }


    
}

function showHelpDhl() {

    
    if(helpDhl == 0) {
        
        helpDhl = 1;
        document.getElementById('helpDhlwsh').style.display = 'block';
        document.getElementById('helpFoit1').style.color = 'rgb(25, 88, 23)';
        

    }else {

        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';
        document.getElementById('helpFoit1').style.color = 'black';

    }
    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
        document.getElementById('helpFoit2').style.color = 'black';

    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
        document.getElementById('helpFoit3').style.color = 'black';
    }

    if (helpKata == 1) {
        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';
        document.getElementById('helpEkdot1').style.color = 'black';
    }

    if(helpAccountEkdot == 1) {
        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
        document.getElementById('helpEkdot2').style.color = 'black';
    }
}

function showHelpAccount() {

    if(helpAccount == 0) {
        
        helpAccount = 1;
        document.getElementById('helpAcc').style.display = 'block';
        document.getElementById('helpFoit2').style.color = 'rgb(25, 88, 23)';

    }else {

        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
        document.getElementById('helpFoit2').style.color = 'black';

    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';
        document.getElementById('helpFoit1').style.color = 'black';


    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
        document.getElementById('helpFoit3').style.color = 'rgb(25, 88, 23)';


    }

    if (helpKata == 1) {
        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';
        document.getElementById('helpEkdot1').style.color = 'black';
    }

    if(helpAccountEkdot == 1) {
        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
        document.getElementById('helpEkdot2').style.color = 'black';
    }

}

function showHelp() {

    if(help == 0) {
        
        help = 1;
        document.getElementById('helpMe').style.display = 'block';
        document.getElementById('helpFoit3').style.color = 'rgb(25, 88, 23)';


    }else {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
        document.getElementById('helpFoit3').style.color = 'black';

    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';
        document.getElementById('helpFoit1').style.color = 'black';

    }

    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
        document.getElementById('helpFoit2').style.color = 'black';
    }

    if (helpKata == 1) {
        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';
        document.getElementById('helpEkdot1').style.color = 'black';
    }

    if(helpAccountEkdot == 1) {
        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
        document.getElementById('helpEkdot2').style.color = 'black';
    }

}

//gia ton Ekdoth
function showSubMenuEkdot() {

    
    if(disEkdot == 0) {
        
        disEkdot = 1;
        document.getElementById('subListEkdot').style.display = 'block';
        document.getElementById('ekdotoLink').style.color = 'rgb(25, 88, 23)';

    }else {

        disEkdot = 0;
        document.getElementById('subListEkdot').style.display = 'none';
        document.getElementById('ekdotoLink').style.color = 'black';
        document.getElementById('helpEkdot1').style.color = 'black';
        document.getElementById('helpEkdot2').style.color = 'black';
        
        
    }

    if (helpKata == 1) {
        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';

    }

    if(helpAccountEkdot == 1) {
        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
    }


    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';
        document.getElementById('helpFoit1').style.color = 'black';
        

    }

    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
        document.getElementById('helpFoit2').style.color = 'black';
        
    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
        document.getElementById('helpFoit3').style.color = 'black';

    }
    


    
}

function showHelpKata() {

    
    if(helpKata == 0) {
        
        helpKata = 1;
        document.getElementById('helpKata').style.display = 'block';
        document.getElementById('helpEkdot1').style.color = 'rgb(25, 88, 23)';
        

    }else {

        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';
        document.getElementById('helpEkdot1').style.color = 'black';

    }
    if(helpAccountEkdot == 1) {
        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
        document.getElementById('helpEkdot2').style.color = 'black';

    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';
        document.getElementById('helpFoit1').style.color = 'black';
        

    }

    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
        document.getElementById('helpFoit2').style.color = 'black';
        
    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
        document.getElementById('helpFoit3').style.color = 'black';

    }
    
}

function showHelpAccountEkdot() {

    if(helpAccountEkdot == 0) {
        
        helpAccountEkdot = 1;
        document.getElementById('helpAccEkdot').style.display = 'block';
        document.getElementById('helpEkdot2').style.color = 'rgb(25, 88, 23)';

    }else {

        helpAccountEkdot = 0;
        document.getElementById('helpAccEkdot').style.display = 'none';
        document.getElementById('helpEkdot2').style.color = 'black';

    }

    if (helpKata == 1) {
        helpKata = 0;
        document.getElementById('helpKata').style.display = 'none';
        document.getElementById('helpEkdot1').style.color = 'black';


    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';
        document.getElementById('helpFoit1').style.color = 'black';
        

    }

    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
        document.getElementById('helpFoit2').style.color = 'black';
        
    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
        document.getElementById('helpFoit3').style.color = 'black';

    }
    

}


