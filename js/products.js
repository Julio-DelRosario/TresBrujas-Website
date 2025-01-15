document.addEventListener('DOMContentLoaded', () => {
    const productGrid = document.getElementById('product-grid');
    if(!productGrid) {
        console.error('No product grid found on this page');
        return;
    }

    const cartKey = 'shoppingCart';

    //fetch products from the server
    fetch('fetch_products.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok' + response.statusText);
            }
            return response.json();
        })
        .then(products => {
            products.forEach(product => {
                const productDiv = document.createElement('div');
                productDiv.classList.add('product');
                productDiv.innerHTML = `
                    <button class="view-product" id="view-button" onclick="viewProduct()">
                        <img src="data:image/webp;base64,${product.productImage}" alt="${product.productName}">
                        <h3>${product.productName}</h3>
                        <p>$${product.productPrice}</p>
                    </button>
                    <button class="add-to-cart" onclick="addToCart(${product.productID}, '${product.productName}', ${product.productPrice})">
                    Add to Cart
                    </button>
                `;
                productGrid.appendChild(productDiv);
            });
        })
        .catch(error => {
            console.error('Error fetching products:', error);
        });
});

function addToCart(productID, productName, productPrice) {
    const cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
    const product = { id: productID, name: productName, price: productPrice };
    cart.push(product);
    localStorage.setItem('shoppingCart', JSON.stringify(cart));
    console.log('Product added to cart:', product);
}

