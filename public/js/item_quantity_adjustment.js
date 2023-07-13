$(document).ready(function(){
    $('.minus').click(() => {
        let currentQuantity = parseInt($('.quantity').text());
        $('.quantity').text(currentQuantity-1);
    });
    $('.plus').click(() => {
        let currentQuantity = parseInt($('.quantity').text());
        $('.quantity').text(currentQuantity+1);
        
        if(currentQuantity == 99) {
            alert('Wait wait mah home boy, whatchu buy 99 pair of shoes for ?')
        }
    });
});