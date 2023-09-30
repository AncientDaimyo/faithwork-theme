const header = document.querySelector('header');
const logo1 = document.querySelector('#logo1');
const logo2 = document.querySelector('#logo2');
const main = document.querySelector('main');

var minOffset = 50;
  window.addEventListener('scroll', headerScroll); 
  function headerScroll() { 
    let has_class = header.classList.contains("is_scrolled");
 
    if (minOffset < document.documentElement.scrollTop ) {
      if (!has_class) {
          header.classList.toggle("is_scrolled");
          logo1.classList.toggle("inactive");
          logo2.classList.toggle("inactive");
          el.classList.toggle("black");
          main.classList.toggle("main-scroll");
      } 
    } else if (has_class) {
      header.classList.toggle("is_scrolled");
      logo1.classList.toggle("inactive");
      logo2.classList.toggle("inactive");
      el.classList.toggle("black");
      main.classList.toggle("main-scroll");
    } 
  }