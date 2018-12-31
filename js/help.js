var dis = 0;
var helpDhl = 0;
var helpAccount = 0;
var help = 0;

function showSubMenu() {

    
    if(dis == 0) {
        
        dis = 1;
        document.getElementById('subList').style.display = 'block';
        console.log(document.getElementById('subList').display);

    }else {

        dis = 0;
        document.getElementById('subList').style.display = 'none';
        
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


    
}

function showHelpDhl() {

    
    if(helpDhl == 0) {
        
        helpDhl = 1;
        document.getElementById('helpDhlwsh').style.display = 'block';
        

    }else {

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
}

function showHelpAccount() {

    if(helpAccount == 0) {
        
        helpAccount = 1;
        document.getElementById('helpAcc').style.display = 'block';
        

    }else {

        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';

    }
    if(help == 1) {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';

    }

}

function showHelp() {

    if(help == 0) {
        
        help = 1;
        document.getElementById('helpMe').style.display = 'block';
        

    }else {

        help = 0;
        document.getElementById('helpMe').style.display = 'none';
    }

    if (helpDhl == 1) {
        helpDhl = 0;
        document.getElementById('helpDhlwsh').style.display = 'none';

    }

    if(helpAccount == 1) {
        helpAccount = 0;
        document.getElementById('helpAcc').style.display = 'none';
    }

}


