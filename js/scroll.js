var  header = document.querySelector('header');
var  logo1 = document.querySelector('#logo1');
var  logo2 = document.querySelector('#logo2');
var  main = document.querySelector('main');
var  minOffset = 50;
window.addEventListener('scroll', headerScroll);

function headerScroll() {
  let has_class = header.classList.contains('is_scrolled');
  let is_active = el.classList.contains('active');
  if (minOffset < document.documentElement.scrollTop) {
    if (!has_class) {
      header.classList.add('is_scrolled');
      logo1.classList.add('inactive');
      logo2.classList.remove('inactive');
      el.classList.add('black');
      main.classList.add('main-scroll');
      navicons.forEach((navicon) => {
        if (!is_active) {
          navicon.classList.add('black');
        }
      });
    }
  } else {
    header.classList.remove('is_scrolled');
    logo1.classList.remove('inactive');
    logo2.classList.add('inactive');
    el.classList.remove('black');
    main.classList.remove('main-scroll');
    navicons.forEach((navicon) => {
      if (!is_active) {
        navicon.classList.remove('black');
      }
    });
  }
}