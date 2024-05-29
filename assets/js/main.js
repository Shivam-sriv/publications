
$(".counter").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-countto");
  countDuration = parseInt($this.attr("data-duration"));
  $({ counter: $this.text() }).animate(
    {
      counter: countTo
    },
    {
      duration: countDuration,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.counter));
      },
      complete: function () {
        $this.text(this.counter);
      }
    }
  );
});

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();    
  if (scroll <= 30) {
    $(".header-shrink").removeClass("header-shrink").addClass("custom-shadow");
  }else{

    $(".custom-shadow").removeClass("custom-shadow").addClass("header-shrink");
  }
});

$('.featured-book').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$('.featured-authors').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})



