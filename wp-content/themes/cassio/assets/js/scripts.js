//Home
const target = document.querySelectorAll('[data-anime]');
const animationClassHome = 'animar';

function animacaoScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight + 0) / 4);
    target.forEach(function(e) {
        if((windowTop) > e.offsetTop) {
            e.classList.add(animationClassHome);
        }
    });
}
window.addEventListener('scroll', function() {
    animacaoScroll();
});


$('.tecnology').owlCarousel({
    loop:true,
    margin:50,
    nav:false,
    autoWidth: true,
    dots: false,
    //center: true,
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
    },
    autoplay: true,
    autoplayTimeout: 1000
});