const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });

  function quitBlock(){
    let sliders = document.querySelectorAll(".swiper-slide");
    for(var i = 0; i<sliders.length; i++){
        sliders[i].style.display = "grid";
        sliders[i].classList.add("center");
    }
  }