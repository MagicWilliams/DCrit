$(document).ready(function() {
    $("a").each(function() {
    if(this.host !== window.location.host && !$(this).hasClass("external-link") && $(this).attr('href')) {
        if($(this).children().first().is("img")) {
            return
        } else {
            $(this).addClass("external-link");
        }
    }
    });
    let emailicon = "<span class='email'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 75.29 51.12'><path d='M66.1,0H9.2C4.13,0,0,4.13,0,9.2V41.92c0,5.07,4.13,9.2,9.2,9.2h56.9c5.07,0,9.2-4.13,9.2-9.2V9.2c0-5.07-4.12-9.2-9.2-9.2Zm-4.49,6l-23.96,15.43L13.69,6H61.6Zm4.49,39.12H9.2c-1.76,0-3.2-1.44-3.2-3.2V9.37l29.8,19.16s.08,.04,.12,.06c.04,.02,.09,.05,.13,.07,.23,.12,.47,.22,.71,.28,.03,0,.05,0,.08,.02,.27,.06,.54,.1,.81,.1h0c.27,0,.54-.04,.81-.1,.03,0,.05,0,.08-.02,.24-.06,.48-.16,.71-.28,.04-.02,.09-.04,.13-.07,.04-.02,.08-.04,.12-.06l29.8-19.16V41.92c0,1.76-1.44,3.2-3.2,3.2Z'/></svg></span>";
    $('a[href^="mailto:"]').append(emailicon);
    $(".carousel").slick({
        dots: false,
        arrows: true,
        slidesToShow: 3,
        infinite: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ],
        appendArrows: $('.carousel-controls'),
        prevArrow: '<button type="button" class="custom-prev-button carousel-button session">'
  + '<span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40.74 31"><path d="M0,17.31H24.82c.93,0,1.84-.05,2.75-.14,.9-.09,1.82-.23,2.75-.42,.93-.18,1.78-.32,2.57-.42,.79-.09,1.6-.14,2.43-.14v.21c-2.36,1.11-4.36,2.31-5.98,3.58-1.62,1.27-2.94,2.54-3.96,3.79-1.02,1.25-2.04,2.67-3.06,4.24l3.34,2.99c1.3-2.36,2.64-4.4,4.03-6.12,1.39-1.71,2.97-3.24,4.73-4.59,1.76-1.34,3.87-2.59,6.32-3.75v-2.08c-2.46-1.16-4.56-2.41-6.32-3.75-1.76-1.34-3.34-2.87-4.73-4.59-1.39-1.71-2.73-3.75-4.03-6.12l-3.34,2.99c1.02,1.58,2.04,2.99,3.06,4.24,1.02,1.25,2.34,2.51,3.96,3.79,1.62,1.27,3.61,2.47,5.98,3.58v.21c-.83,0-1.65-.05-2.43-.14-.79-.09-1.62-.23-2.5-.42-.97-.18-1.89-.32-2.74-.42-.86-.09-1.8-.14-2.82-.14H0v3.61Z"/></svg></span>'
  + '<span class="sr-only">Previous slide</span>'
  + '</button>',
nextArrow: '<button type="button" class="custom-next-button carousel-button session">'
  + '  <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40.74 31"><path d="M0,17.31H24.82c.93,0,1.84-.05,2.75-.14,.9-.09,1.82-.23,2.75-.42,.93-.18,1.78-.32,2.57-.42,.79-.09,1.6-.14,2.43-.14v.21c-2.36,1.11-4.36,2.31-5.98,3.58-1.62,1.27-2.94,2.54-3.96,3.79-1.02,1.25-2.04,2.67-3.06,4.24l3.34,2.99c1.3-2.36,2.64-4.4,4.03-6.12,1.39-1.71,2.97-3.24,4.73-4.59,1.76-1.34,3.87-2.59,6.32-3.75v-2.08c-2.46-1.16-4.56-2.41-6.32-3.75-1.76-1.34-3.34-2.87-4.73-4.59-1.39-1.71-2.73-3.75-4.03-6.12l-3.34,2.99c1.02,1.58,2.04,2.99,3.06,4.24,1.02,1.25,2.34,2.51,3.96,3.79,1.62,1.27,3.61,2.47,5.98,3.58v.21c-.83,0-1.65-.05-2.43-.14-.79-.09-1.62-.23-2.5-.42-.97-.18-1.89-.32-2.74-.42-.86-.09-1.8-.14-2.82-.14H0v3.61Z"/></svg></span>'
  + '  <span class="sr-only">Next slide</span>'
  + '</button>'
    });


var foc = false;

$('.carousel').on('afterChange', function(event, slick, currentSlide, nextSlide){
    foc = true;
});

$(document).on('keyup', function(e) {
    if(e.which == 9) {
        if(foc) {
            e.preventDefault();
            $(".slick-current .carousel-link").focus();
            foc = false;
        }
    }
});

});