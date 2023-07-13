$(document).ready(function(){
    $('.delete').click(() => {
        localStorage.removeItem('cartItem');
        location.reload();
    });
});