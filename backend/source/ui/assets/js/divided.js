$(document).ready(function(){
    if (!localStorage.getItem('login')) {
        $('.eviden-doc-list').addClass('inactive');
    } else {
        $('.eviden-doc-list').removeClass('inactive');
        $('.eviden-doc-popup-inactive').addClass('d-none');
    }
});