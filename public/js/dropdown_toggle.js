$(document).ready(function(){
    
    let dropdownShow = false;
    let dropdown = $('#dropdown');

    $('#collapsed_menu').click(() => {

        // set inputType value
        dropdownShow ? dropdown.hide() : dropdown.show() ;

        // swap the state true <=> false
        dropdownShow = !dropdownShow;

    });
});