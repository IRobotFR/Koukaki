/**
 * Custom Swiper Script de Tilo
 *
 * 02/2024
 */

// Initialisation Swiper

console.log("custom script");

const swiper = new Swiper('.swiper', {
    speed: 400,
    slidesPerView: 3,
    loop: true,
    spaceBetween: 100,
    autoplay: {
        delay: 2000,
    },
    effect: 'coverflow',
    // slideShadows: false,
    coverflowEffect: {
                rotate: 60,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
});


// Animation des nuages

// Ajout d'un détecteur de "scroll" de la souris

window.addEventListener('scroll', function () {

    // Selection des différents éléments

    const bigCloud = document.querySelector('.bigCloud');
    const littleCloud = document.querySelector('.littleCloud');
    const placeSection = document.querySelector('#place');

    // Détermination de la position verticale (offsetTop) de la section "place"/haut de la page
    // et la position verticale de défilement

    const sectionOffsetTop = placeSection.offsetTop;
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Verif si position de défilement actuelle est >= à la position verticale

    if (scrollPosition >= sectionOffsetTop) {

        // calcule la valeur du défilement, calcule l'intensité des déplacements

        const parallaxValue = (scrollPosition - sectionOffsetTop) / 2;

        // Math.min() limite la valeur du déplacement

        const translationX = Math.min(parallaxValue, 3000);

        // CSS transform pour modifier la position horizontale des nuages avec translateX

        bigCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
        littleCloud.style.transform = 'translateX(' + (-translationX) + 'px)';
    }
});




