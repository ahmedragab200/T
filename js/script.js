// const mebnu = document.querySelector('#sidemenu');

// window.onscroll = ()=>{
//     menu.classList.remove('active')
// }




window.addEventListener('scroll', function(){
    var header = document.querySelector('.header');
    header.classList.toggle('sticky', window.scrollY > 0)
})







let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



  

  let loadMoreBtn =document.querySelector('.package .load-more .btn');
  let currentItem = 3;

  loadMoreBtn.onclick = ()=>{
      let boxs = [...document.querySelectorAll('.package .box-container .box')];
      for(var i = currentItem; i < currentItem +3; i++){
           boxs[i].style.display = 'inline-block';

      };
      currentItem += 3;
      if(currentItem >= boxs.length){
          loadMoreBtn.style.display = 'none';
      }
  }













  var swiper = new Swiper(".reviews-slider", {
    loop:true,
    spaceBetween: 20,
    autoHeight:true,
    grabCursor:true,
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
  });
