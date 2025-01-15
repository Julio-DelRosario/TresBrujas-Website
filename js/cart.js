const cartKey = 'shoppingCart';
const cart = JSON.parse(localStorage.getItem(cartKey)) || [];

const products = document.getElementById('products');
const cartItems = document.getElementById('cart-items');

function renderCart() {
  cartItems.innerHTML = '';
  for (const product of data) {
    const productDiv = document.createElement('div');
    productDiv.className = 'product';
    productDiv.innerHTML = `
      <h3>${product.name}</h3>
      <p>${product.price}</p>
      <button onclick="addToCart(${product.id})">Add to Cart</button>
    `;
    products.appendChild(productDiv);
  }
}
