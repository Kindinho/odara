document.addEventListener("DOMContentLoaded", function() {
    var MenuItens = document.getElementById("MenuItens");
    
    if (MenuItens) {
        MenuItens.style.maxHeight = "0px"; 

        function menucelular() {
            if (MenuItens.style.maxHeight === "0px") {
                MenuItens.style.maxHeight = "200px";
            } else {
                MenuItens.style.maxHeight = "0px"; 
            }
        }

        document.querySelector('.menu-celular').addEventListener('click', menucelular);
    }

    var produtoimg = document.querySelector(".col-2 img");
    var produtoMiniaturas = document.querySelectorAll(".img-col img");

    if (produtoimg && produtoMiniaturas.length > 0) {
        produtoMiniaturas.forEach(miniatura => {
            miniatura.addEventListener("click", function() {
                produtoimg.src = this.src;
            });
        });
    }

    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    function addToCart(product) {
        const existingProduct = cart.find(item => item.id === product.id && item.modelo === product.modelo);
        if (existingProduct) {
            existingProduct.quantidade += product.quantidade;
        } else {
            cart.push(product);
        }
        saveCart();
        updateCartDisplay();
    }

    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        saveCart();
        updateCartDisplay();
    }

    function updateCartDisplay() {
        const cartContainer = document.querySelector('.carrinho-compras table');
        if (cartContainer) {
            cartContainer.innerHTML = `
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
            `;
            cart.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>
                        <div class="info-carrinho">
                            <img src="${item.imagem}" alt="${item.nome}">
                            <div>
                                <p>${item.nome} - ${item.modelo}</p>
                                <small>Valor: R$ ${item.preco}</small>
                                <br>
                                <a href="#" class="remove" data-id="${item.id}">Remover</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="number" value="${item.quantidade}" min="1" class="update-quantity" data-id="${item.id}">
                    </td>
                    <td>R$ ${item.preco * item.quantidade}</td>
                `;
                cartContainer.appendChild(row);
            });

            const total = cart.reduce((sum, item) => sum + item.preco * item.quantidade, 0);
            document.getElementById('cart-total').textContent = `R$ ${total}`;
        }
    }

    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('click', function (event) {
            const form = button.closest('form');
            if (form) {
                event.preventDefault();
                const id = form.dataset.productId;
                const nome = form.dataset.productName;
                const preco = parseFloat(form.dataset.productPrice);
                const imagem = form.dataset.productImage;
                const modelo = form.querySelector('select[name="modelo"]').value || 'Sem modelo';
                const quantidade = parseInt(form.querySelector('input[name="quantidade"]').value);

                const product = { id, nome, preco, imagem, modelo, quantidade };
                addToCart(product);
            } else {
                // For buttons without a form, allow default action (e.g., navigating to a link)
                return;
            }
        });
    });

    const cartTable = document.querySelector('.carrinho-compras table');
    if (cartTable) {
        cartTable.addEventListener('click', function (event) {
            if (event.target.classList.contains('remove')) {
                event.preventDefault();
                const id = event.target.dataset.id;
                removeFromCart(id);
            }
        });

        cartTable.addEventListener('change', function (event) {
            if (event.target.classList.contains('update-quantity')) {
                const id = event.target.dataset.id;
                const quantity = parseInt(event.target.value);
                const product = cart.find(item => item.id === id);
                product.quantidade = quantity;
                saveCart();
                updateCartDisplay();
            }
        });
    }

    // Função para finalizar compra
    const finalizarCompraButton = document.getElementById('btn-finalizar-compra');
    if (finalizarCompraButton) {
        finalizarCompraButton.addEventListener('click', function() {
            alert('Sua compra foi finalizada!');
            cart = [];
            saveCart();
            updateCartDisplay();
        });
    }

    updateCartDisplay();

    const sortPrice = document.getElementById('sortPrice');
    const productsContainer = document.getElementById('productsContainer');

    if (sortPrice && productsContainer) {
        sortPrice.addEventListener('change', function() {
            const order = sortPrice.value;
            let products = Array.from(productsContainer.getElementsByClassName('col-4'));
            products.sort((a, b) => {
                const priceA = parseFloat(a.querySelector('p').innerText.replace('R$', '').trim());
                const priceB = parseFloat(b.querySelector('p').innerText.replace('R$', '').trim());
                return order === 'asc' ? priceA - priceB : priceB - priceA;
            });
            products.forEach(product => productsContainer.appendChild(product));
        });
    }
});
