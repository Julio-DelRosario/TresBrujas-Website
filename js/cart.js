var cart = [];
var products = {
    white_sage: { id: 1, name: "White Sage with Lavender and Palo Santo", price: 500 },
    blue_sage: { id: 2, name: "Blue Sage", price: 300 },
    cedar: { id: 3, name: "Cedar", price: 300 },
    dragons_blood: { id: 4, name: "Dragon's Blood", price: 400 },
    mugwort: { id: 5, name: "Mugwort", price: 400 },
    yerba_santa: { id: 6, name: "Yerba Santa", price: 400 }
};

function addProduct(item){
    cart.push(item);
    console.log(cart);
}