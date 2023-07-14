$(document).ready(function(){

    let item = {
        "name": "Aerodyno DSEA98 Shoe",
        "image": "http://http://eureka-ecommerce-6b8a0fc2f8b3.herokuapp.com/images/cart/item.jpg",
        "price": "$178.00",
        "quantity": 1
    };

    $('#add_to_cart_button').click(() => {
        
        // if cart is empty, add item to cart
        if(localStorage.getItem('cartItem') == null) {
            localStorage.setItem('cartItem', JSON.stringify(item))
            alert('Thêm sản phẩm vào giỏ hàng thành công.')
        } else {
            alert('Sản phẩm đã có sẵn trong giỏ hàng. Quý khách vui lòng ghé mục giỏ hàng để xem sản phẩm.');
        }

    });
});