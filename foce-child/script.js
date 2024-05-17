console.log("hello");

let elements = document.querySelectorAll("h2, h3, #titleH2up, #titleH2up1, #titleH2up2, #story, #characters, #place, #studio, .nomination");
console.log(elements);

window.addEventListener("scroll", function () {
    let scrollToTop = window.scrollY;
    let windowHeight = window.innerHeight;

    elements.forEach(function (element) {

        let elementTop = element.getBoundingClientRect().top;
        let elementBottom = element.getBoundingClientRect().bottom;
        if (elementTop >= 0 && elementBottom <= windowHeight) {
            element.classList.add("active");
        }
    });
});



// Contrôle si on scroll sur la fenêtre

let root = document.querySelector(":root")

window.addEventListener("scroll", () => {
    
    // Si on scroll, cela accélère la rotation des fleurs

    var vertical = -1;
    setInterval(function () {
        if (window.scrollY != vertical) {
            vertical = window.scrollY;
            root.style.setProperty("--rotate", "2s");
        } else {
            root.style.setProperty("--rotate", "22s");
        }
    }, 500);
});


// https://www.toutjavascript.com/reference/ref-window.scrolly.php
