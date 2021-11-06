$(document).ready(function () {
    $('dt').click(function() {
        let iconToggle = $(this).children('.icon');
        iconToggle.toggleClass('see-full');
        let ddFirst = $(this).nextAll(':first');
        ddFirst.toggleClass('see-full');
    });
});