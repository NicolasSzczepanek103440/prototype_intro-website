let click = 0;

let burg_container = document.getElementById("burger_container");

function burger_interact(){
    if(click === 0){
        burg_container.style.animation = "open 0.5s ease-out both";

        click = 1;
    } else {
        burg_container.style.animation = "close 0.5s ease-in both";

        click = 0;
    }

}

