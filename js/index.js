tl = gsap.timeline({
  defaults: {
    duration: 1,
    ease: "expo.inOut",
  },
});

tl.to(".slide-1", { width: 0 }).to("#introduction", { height: 0 });

new WOW().init();

$(document).ready(function () {

});
