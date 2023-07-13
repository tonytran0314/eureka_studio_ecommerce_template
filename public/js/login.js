$(document).ready(function(){
    let passwordShow = false;
    let inputType;
    $("#password_toggle").click(() => {

        // set inputType value
        inputType = passwordShow ? 'password' : 'text';

        // swap the state true <=> false
        passwordShow = !passwordShow;

        // swap icon
        $(this).toggleClass('fa-eye-slash fa-eye');

        // set 'type' attribute of the input tag
        $('#password_field').attr('type', inputType); 

    });
});