<section class="menu-section" style="background-image: url('menu-bg.jpg');">
            <div class="menu-overlay"></div>
            <h3>Comidas</h3>
            <div class="menu-list">
                <div class="item">
                    <img src="{{ asset('../resources/img/sandwich.jpg') }}" alt="Sandwich">
                    <h3>Sandwich</h3>
                    <p>Sandwich de sacramento con salame y queso, con lechuga y tomate</p>
                    <p class="price">$2.49</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/empanadas.jpg') }}" alt="Hamburguesa vegetariana">
                    <h3>Empanadas</h3>
                    <p>12 empanadas de carne</p>
                    <p class="price">$6.49</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/hamburguesa2.jpg') }}" alt="Hamburguesa vegetariana">
                    <h3>Hamburguesa</h3>
                    <p>Hambuguesa con queso</p>
                    <p class="price">$6.49</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/papasfritas.jpg') }}" alt="Papas Fritas">
                    <h3>Papas Fritas</h3>
                    <p></p>
                    <!-- Select dentro de un contenedor -->
                    <div class="select-container">
                        <label for="size-fries">Tamaño:</label>
                        <select id="size-fries" name="size-fries" onchange="updatePrice('size-fries', 'price-fries')">
                            <option value="small" data-price="3.99">Chica</option>
                            <option value="medium" data-price="4.99">Mediana</option>
                            <option value="large" data-price="5.99">Grande</option>
                        </select>
                    </div>
                    <!-- Mostrar precio aquí -->
                    <p class="price" id="price-fries">$3.99</p>
                    <button class="order-btn">Ordenar</button>
                </div>
                <div class="item">
                    <img src="{{ asset('../resources/img/pizza2.jpg') }}" alt="Pizza Muzzarella">
                    <h3>Pizza Muzzarella</h3>
                    <p>Pizza con queso Muzarella </p>
                    <p class="price">$6.49</p>
                    <button class="order-btn">Ordenar</button>
                </div>
            </div>
        </section>