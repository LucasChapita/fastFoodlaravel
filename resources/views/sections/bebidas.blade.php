<section class="menu-section" style="background-image: url('drinks-bg.jpg');">
            <div class="menu-overlay"></div>
            <h3>Bebidas</h3>
            <div class="menu-list">
                <div class="item">
                    <img src="{{ asset('../resources/img/agua2.jpg') }}" alt="Refresco">
                    <h3>Agua</h3>
                    <p>Refresco frío de tu elección.</p>

                    <!-- Select dentro de un contenedor -->
                    <div class="select-container">
                        <label for="size-water">Tamaño:</label>
                        <select id="size-water" name="size-water" onchange="updatePrice('size-water', 'price-water')">
                            <option value="small" data-price="1.99">500ml</option>
                            <option value="medium" data-price="2.99">1L</option>
                            <option value="large" data-price="3.99">2L</option>
                        </select>
                    </div>
                    <p class="price" id="price-water">$1.99</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/cocacola2.jpg') }}" alt="Refresco">
                    <h3>Cocacola</h3>
                    <p>Refresco frío de tu elección.</p>

                    <!-- Select dentro de un contenedor -->
                    <div class="select-container">
                        <label for="size-cocacola">Tamaño:</label>
                        <select id="size-cocacola" name="size-cocacola"
                            onchange="updatePrice('size-cocacola', 'price-cocacola')">
                            <option value="small" data-price="1.99">500ml</option>
                            <option value="medium" data-price="2.99">1L</option>
                            <option value="large" data-price="3.99">2L</option>
                        </select>
                    </div>
                    <p class="price" id="price-cocacola">$1.99</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/pepsi2.jpg') }}" alt="Refresco">
                    <h3>Pepsi</h3>
                    <p>Refresco frío de tu elección.</p>

                    <!-- Select dentro de un contenedor -->
                    <div class="select-container">
                        <label for="size-pepsi">Tamaño:</label>
                        <select id="size-pepsi" name="size-pepsi"
                            onchange="updatePrice('size-pepsi', 'price-pepsi')">
                            <option value="small" data-price="1.99">500ml</option>
                            <option value="medium" data-price="2.99">1L</option>
                            <option value="large" data-price="3.99">2L</option>
                        </select>
                    </div>
                    <p class="price" id="price-pepsi">$1.99</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/sprite.jpg') }}" alt="Café">
                    <h3>Sprite</h3>
                    <p>Café caliente o frío.</p>
                    <!-- Select dentro de un contenedor -->
                    <div class="select-container">
                        <label for="size-sprite">Tamaño:</label>
                        <select id="size-sprite" name="size-sprite"
                            onchange="updatePrice('size-sprite', 'price-sprite')">
                            <option value="small" data-price="1.99">500ml</option>
                            <option value="medium" data-price="2.99">1L</option>
                            <option value="large" data-price="3.99">2L</option>
                        </select>
                    </div>
                    <p class="price" id="price-sprite">$1.99</p>
                    <button class="order-btn">Ordenar</button>
                </div>
            </div>
        </section>