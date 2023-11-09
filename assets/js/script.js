$(document).ready(function () {
    const desk = window.matchMedia('(min-width: 769px)');

    var path = $("header svg path").get(0);
    var length = path.getTotalLength();
    $("header svg path").css({
        "--dashArray": length,
        "--strokeOffset": length
    });

    $("button.menu").click(function () {
        toggleMenu(this, desk);
    });

    $(".main-nav .sublinks a").on('click', function() {
        let menuButton = $("button.menu");
        toggleMenu(menuButton, desk);
    });

    $("iframe").each(function() {
        let url = $(this).attr('src');
        if(url.includes("vimeo")) {
            url = `${url}?byline=0&portrait=0&title=0`;
        }
        $(this).attr('src', url);
    });

    let emailicon = "<span class='email'><svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 75.29 51.12'><path d='M66.1,0H9.2C4.13,0,0,4.13,0,9.2V41.92c0,5.07,4.13,9.2,9.2,9.2h56.9c5.07,0,9.2-4.13,9.2-9.2V9.2c0-5.07-4.12-9.2-9.2-9.2Zm-4.49,6l-23.96,15.43L13.69,6H61.6Zm4.49,39.12H9.2c-1.76,0-3.2-1.44-3.2-3.2V9.37l29.8,19.16s.08,.04,.12,.06c.04,.02,.09,.05,.13,.07,.23,.12,.47,.22,.71,.28,.03,0,.05,0,.08,.02,.27,.06,.54,.1,.81,.1h0c.27,0,.54-.04,.81-.1,.03,0,.05,0,.08-.02,.24-.06,.48-.16,.71-.28,.04-.02,.09-.04,.13-.07,.04-.02,.08-.04,.12-.06l29.8-19.16V41.92c0,1.76-1.44,3.2-3.2,3.2Z'/></svg></span>";
    $('a[href^="mailto:"]').append(emailicon);

});

function toggleMenu(that, medq) {
    if ($(that).attr('aria-expanded') === 'true') {
        $(that).attr('aria-expanded', 'false');
        $(".navarea, button.menu").removeClass("opened");
        if(medq.matches) {
            console.log("desk menu");
            $(that).children('.desk').text('Menu');
        } 
        setTimeout(function () {
            $(".navarea").hide();
        }, 500);
    } else {
        $(that).attr('aria-expanded', 'true');
        $(".navarea").show();
        setTimeout(function() {
            $(".navarea, button.menu").addClass("opened");
        }, 50);
        if(medq.matches) {
            $(that).children('.desk').text('Close');
        } 
    }
}
