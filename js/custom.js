$(document).ready(function(){
  var swiper = new Swiper(".mySwiper", {
      loop:true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",

        },
        autoplay: {
          delay: 3000,
        },

        pagination: {
          el: ".swiper-pagination",
        },

      });

      $( ".hamburger-icon" ).click(function() {
        $(".mobile-menu").css("display", "block");
        console.log(this);
      });

      $(".cross-icon").click(function() {
        $(".mobile-menu").css("display","none");
      });


      $(".open-div").click(function() {
        $(".open-div").not(this).siblings().removeClass('sub-menu-open');
        $(".open-div").not(this).children("i").removeClass( "fa-angle-up" );
        $(this).children("i").toggleClass( "fa-angle-up" );
        $(this).siblings().toggleClass('sub-menu-open');
      });
      


      
      

  });