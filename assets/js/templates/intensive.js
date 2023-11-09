$(document).ready(function() {
    const observer = new IntersectionObserver(entries=> {
        entries.forEach(entry => {
            const intersecting = entry.isIntersecting;
            if(intersecting) {
              $(".home").removeClass("inter");
              setTimeout(function() {
                $(".home").hide();
                $("header").removeClass("bg");
              }, 100);
            } else {
              $(".home").show();
              setTimeout(function() {
                $("header").addClass("bg");
                $(".home").addClass("inter");
              }, 100);
    
            }
        });
    });

    observer.observe(document.getElementById("impact"));

    $("a").each(function() {
        if(this.host !== window.location.host &&!$(this).hasClass("external-link") && $(this).attr('href')) {
            if($(this).children().first().is("img") || $(this).hasClass("cta")) {
                return
            } else {
                $(this).addClass("external-link");
            }
        }
    });

    $(".intcourses .person.bio:not(.intcourses .person.bio a)").on('click', function(e) {
        $(this).toggleClass('opened');
        $(this).find('button').attr('aria-expanded', $(this).find('button').attr('aria-expanded') === 'true' ? 'false': 'true');
    });

    $(".instructorlist .person.bio .bio-head, .instructorlist .person.bio .img-container").on('click', function(e) {
        $(this).closest(".person.bio").toggleClass("opened");
        $(this).closest(".person.bio").find('button').attr('aria-expanded', $(this).closest(".person.bio").find('button').attr('aria-expanded') === 'true' ? 'false': 'true');
    });


    $(".carousel").slick({
        dots: true,
        arrows: true,
        slidesToShow: 1,
        infinite: true,
        adaptiveHeight: true,
        appendArrows: $('.carousel-controls'),
        appendDots: $('.carousel-controls'),
        prevArrow: '<button type="button" class="custom-prev-button carousel-button session">'
  + '<span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40.74 31"><path d="M0,17.31H24.82c.93,0,1.84-.05,2.75-.14,.9-.09,1.82-.23,2.75-.42,.93-.18,1.78-.32,2.57-.42,.79-.09,1.6-.14,2.43-.14v.21c-2.36,1.11-4.36,2.31-5.98,3.58-1.62,1.27-2.94,2.54-3.96,3.79-1.02,1.25-2.04,2.67-3.06,4.24l3.34,2.99c1.3-2.36,2.64-4.4,4.03-6.12,1.39-1.71,2.97-3.24,4.73-4.59,1.76-1.34,3.87-2.59,6.32-3.75v-2.08c-2.46-1.16-4.56-2.41-6.32-3.75-1.76-1.34-3.34-2.87-4.73-4.59-1.39-1.71-2.73-3.75-4.03-6.12l-3.34,2.99c1.02,1.58,2.04,2.99,3.06,4.24,1.02,1.25,2.34,2.51,3.96,3.79,1.62,1.27,3.61,2.47,5.98,3.58v.21c-.83,0-1.65-.05-2.43-.14-.79-.09-1.62-.23-2.5-.42-.97-.18-1.89-.32-2.74-.42-.86-.09-1.8-.14-2.82-.14H0v3.61Z"/></svg></span>'
  + '<span class="sr-only">Previous slide</span>'
  + '</button>',
nextArrow: '<button type="button" class="custom-next-button carousel-button session">'
  + '  <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40.74 31"><path d="M0,17.31H24.82c.93,0,1.84-.05,2.75-.14,.9-.09,1.82-.23,2.75-.42,.93-.18,1.78-.32,2.57-.42,.79-.09,1.6-.14,2.43-.14v.21c-2.36,1.11-4.36,2.31-5.98,3.58-1.62,1.27-2.94,2.54-3.96,3.79-1.02,1.25-2.04,2.67-3.06,4.24l3.34,2.99c1.3-2.36,2.64-4.4,4.03-6.12,1.39-1.71,2.97-3.24,4.73-4.59,1.76-1.34,3.87-2.59,6.32-3.75v-2.08c-2.46-1.16-4.56-2.41-6.32-3.75-1.76-1.34-3.34-2.87-4.73-4.59-1.39-1.71-2.73-3.75-4.03-6.12l-3.34,2.99c1.02,1.58,2.04,2.99,3.06,4.24,1.02,1.25,2.34,2.51,3.96,3.79,1.62,1.27,3.61,2.47,5.98,3.58v.21c-.83,0-1.65-.05-2.43-.14-.79-.09-1.62-.23-2.5-.42-.97-.18-1.89-.32-2.74-.42-.86-.09-1.8-.14-2.82-.14H0v3.61Z"/></svg></span>'
  + '  <span class="sr-only">Next slide</span>'
  + '</button>'
    });

  let controlWidth = $(".sidebar > h2 > span").innerWidth();
  $(".carousel-controls").width(controlWidth);
});