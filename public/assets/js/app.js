let phoneInput = document.querySelectorAll(".contact-phone");
for(i = 0; i < phoneInput.length; i++){
  let phoneInputArray = phoneInput[i];
  const phoneMask = new IMask(phoneInputArray, {
    mask: "+{7}(000)000-00-00",
  });
}
AOS.init();
const myModal = new HystModal({
  linkAttributeName: "data-hystmodal",
});
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 1500,
  },
});
const swiperFeedback = new Swiper('.swiper-feedback', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  loop: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1.5,
  },
  navigation: {
    nextEl: '.btn-next',
    prevEl: '.btn-prev',
  }
});
window.addEventListener("scroll", function(){
  const buttonUp = document.querySelector('.button-up');
  buttonUp.classList.toggle("button-up--active", window.scrollY > 100);
  if(buttonUp.classList.contains("button-up--active")){
    setTimeout(() => { 
      buttonUp.style.visibility = "visible";
    }, 1)
    buttonUp.style.opacity = "1";
  }else{
    setTimeout(() => { 
      buttonUp.style.opacity = "0";
    }, 1)
    buttonUp.style.visibility = "hidden";
  }
});
// responsive navbar
const menuBtn = document.querySelector(".menu-btn");
const navbar = document.querySelector(".header-top__navbar");
menuBtn.addEventListener("click", () => {
  navbar.classList.toggle("header-top__navbar--active");
  if(navbar.classList.contains("header-top__navbar--active")){
    setTimeout(() => { 
      navbar.style.visibility = "visible";
    });
    navbar.style.height = "212px";
  }else{
    setTimeout(() => { 
      navbar.style.height = "0px";
    });
    navbar.style.visibility = "hidden";
  }
});
// anchor scroll 
// document.querySelectorAll('a[href^="#"]').forEach(anchorLink => {
//   anchorLink.addEventListener("click", function(e){
//     e.preventDefault();
//     document.querySelector(this.getAttribute("href")).scrollIntoView({
//       benavior: "smoth"
//     });
//   });
// });
// gsap settings 
gsap.from('#intro-form', { duration: 1.4, y: 100, opacity: 0 });
gsap.from('#intro-video', { duration: 3, opacity: 0 });
gsap.from('#header-top', { duration: 1.4, opacity: 0, y: -100 });