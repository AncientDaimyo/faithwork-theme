const el = document.getElementsByTagName('button')[0];
const navicons = document.querySelectorAll('.header-svg');
const iconsblock = document.querySelector('.navigation-icons');



function burger() {
    let is_scrolled = header.classList.contains("is_scrolled");
    el.classList.toggle('active');
    let is_active = el.classList.contains("active");
    if (is_active) {
        iconsblock.classList.add('active');
        navicons.forEach((navicon) => {
            let is_black = navicon.classList.contains("black");
            if (!is_black) {
                navicon.classList.add("black");
            }
        });
    }
    else {
        iconsblock.classList.remove('active');
        if (is_scrolled) {
            navicons.forEach((navicon) => {
                let is_black = navicon.classList.contains("black");
                if (!is_black) {
                    navicon.classList.add("black");
                }
            });
        }
        else {
            navicons.forEach((navicon) => {
                let is_black = navicon.classList.contains("black");
                if (is_black) {
                    navicon.classList.remove("black");
                }
            });
        }
    }


}
