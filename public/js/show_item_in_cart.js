$(document).ready(function(){
    if(localStorage.getItem('cartItem')) {
    
        let item = JSON.parse(localStorage.getItem('cartItem'));

        $('#empty_cart_notification').hide();
        $('#cart_item_container').show();
        $('#cart_right_column').show();

        $('#cart_item_image').attr('src', item.image);
        $('.cart_item_name').text(item.name);
        $('.cart_item_price').text(item.price);
        $('.quantity').text(item.quantity);

    } else {
        $('#cart_item_container').hide();
        $('#cart_right_column').hide();
        $('#empty_cart_notification').show();
    }

});