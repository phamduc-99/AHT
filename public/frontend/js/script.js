$('.owl-carousel').owlCarousel({
    items: 3,
    loop: true,
    margin: 30,
    dots:true, 
    responsive:{
        1920:{
            items:3
        },
        1200:{
            items:3
        },
        1024:{
            items:3
        },
        768:{
            items:2
        },
        576:{
            items:1
        },
        375:{
            items:1
        },
        320:{
            items:1
        }
    }
});

$(document).ready(function () {
    $('.menu-link-button').click(function (e) { 
        e.preventDefault();
        $(this).find('.menu-link-description').toggle('show');
    });
    
    $('.nav-icon').click(function (e) { 
        e.preventDefault();
        $('.navbar').addClass('active');
        $('.cover').addClass('active');
    });
    $('.cover').click(function (e) { 
        e.preventDefault();
        $('.navbar').removeClass('active');
        $('.cover').removeClass('active');
    });
});