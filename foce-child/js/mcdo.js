console.log("mcdo script");


document.addEventListener("DOMContentLoaded", function () {
    burgerScript();
  });

function burgerScript() {
    console.log("mcdo.js est prêt !");
  
    // Gestion de la fermeture et de l'ouverture du menu BurgerK (menuBK) avec jQuery
    (function($) {
        $(".menuBK-open").click(function () {
        console.log("hamburger burgerk cliqué");
        $(".menuBK__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
        $(".menuBK__content").toggleClass("open");
        $(".menuBK__burger").toggleClass("close");
      });
      $("a").click(function () {
        if ($(".menuBK__content").hasClass("open")) {
          $(".menuBK__content").animate(
            { height: "toggle", opacity: "toggle" },
            1000
          );
          $(".menuBK__content").removeClass("open");
          $(".menuBK__burger").removeClass("close");
        }
      });    
    })(jQuery);
};