$(document).ready(function(){
    let currentQuantity;
    $('.minus').click(() => {
        currentQuantity = parseInt($('.quantity').text());
        $('.quantity').text(currentQuantity-1);

        updateQuantity();

    });
    $('.plus').click(() => {
        currentQuantity = parseInt($('.quantity').text());
        $('.quantity').text(currentQuantity+1);

        updateQuantity();
    });

    const updateQuantity = () => {
        let item = JSON.parse(localStorage.getItem('cartItem'));
        item.quantity = currentQuantity;
        localStorage.setItem('cartItem', JSON.stringify(item));
    }
});