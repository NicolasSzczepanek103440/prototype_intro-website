let base = document.querySelector(".hamburger");

let ham1 = document.getElementById("ham_1");
let ham2 = document.getElementById("ham_2");
let ham3 = document.getElementById("ham_3");
let hamMenu = document.getElementById("hamMenu");

function hamburger_animation(state) {
        if (state == 'open') {
            ham1.style.animationName = 'ham1_open';
            ham2.style.animationName = 'ham2_open';
            ham3.style.animationName = 'ham3_open';

            base.setAttribute("onclick", "hamburger_animation('')");

            setTimeout(function(){
                base.setAttribute("onclick", "hamburger_animation('close')");
            }, 1000);

            hamMenu.style.height = "100px";
        }

        if (state == 'close') {
            ham1.style.animationName = 'ham1_close';
            ham2.style.animationName = 'ham2_close';
            ham3.style.animationName = 'ham3_close';

            base.setAttribute("onclick", "hamburger_animation('')");

            setTimeout(function(){
                base.setAttribute("onclick", "hamburger_animation('open')");
            }, 1000);

            hamMenu.style.height = "0px";
        }
}