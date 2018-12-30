var clicked = 0;

function isClicked() {

    if (clicked==0){
        document.getElementById("lessIsMore").textContent = "Λιγότερα..."
        clicked = 1;
    }else {
        document.getElementById("lessIsMore").textContent = "Περισσότερα..."
        clicked = 0;
    }
}