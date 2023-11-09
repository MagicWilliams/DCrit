$(document).ready(function() {
    $(".courses").on('click', 'button', function (e) {
        let accordion = $(this).closest('.person.bio');
        accordion.toggleClass("opened");
        $(this).attr('aria-expanded', $(this).attr('aria-expanded') === 'true' ? 'false' : 'true');
    });

    $(".courses").on('click', '.accordion', function (e) {
        $(this).closest('.person.bio').find('button').trigger('click');
    });
});