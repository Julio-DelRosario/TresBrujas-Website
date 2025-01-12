var cart = [];

var white_sage = { id: 1, name: "White Sage with Lavender and Palo Santo", price: 500 };
var blue_sage = { id: 2, name: "Blue Sage", price: 300 };
var cedar = { id: 3, name: "Cedar", price: 300 };

function addProduct(item){
    cart.push(item);
    console.log(cart);
}