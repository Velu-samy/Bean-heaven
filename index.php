<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean Heaven</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" type="image/png" href="./pics/icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body style="background-color: white;">
    <header class="Home" id="home">
        <div id="overlayblack" class="overlay">

        </div>
        <div id="overlaybox" class="overlay-box">
            <input type="text">
            <a onclick="closes()"> <i style="color: white;font-size: 20px; margin-left: 10px; padding-top: 8px;"
                    class="fa fa-times"></i>
            </a>
        </div>
        <div id="add-to-cart-actived" class="cart-sidebar" class="cart-sidebar-sd">
            <a onclick="close_nav_bar()"> <i
                    style="color:black;font-size: 20px; margin-left: 290px;margin-top: 5px; cursor: pointer;"
                    class="fa fa-times"></i></a>
            <h2>MyCart</h2>
            <p id="total-price">Total: $0</p>
            <ul id="cart-items"></ul>
        </div>
        <div class="nav">


            <h1 data-aos="fade-down" data-aos-duration="1000">Bean <span>Heaven</span></h1>

            <ul id="open-nav">
                <div class="cross-d " style="margin-right: 90px;">

                    <a onclick="closeb()" style="font-size:30px;margin-top: 35px;"><i style="color:black;"
                            class="fas fa-times"></i></a>

                    <a class="opo" style="color:black;
                    
                    font-size: 20px;
                    margin-top:35px; margin-right: 30px;" href="./frontend/login.html">
                        <i class="fas fa-user"></i>
                    </a>
                    <a style="margin-right:30px; margin-top: 35px;color:black;font-size:20px;">
                        <i onclick="open_side_nav()" class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <li data-aos="fade-down" data-aos-duration="1000"><a href="#home">Home</a></li>
                <li data-aos="fade-down" data-aos-duration="1500"><a href="#product">Products</a></li>
                <li data-aos="fade-down" data-aos-duration="2000"><a href="#about">About us</a></li>
                <li data-aos="fade-down" data-aos-duration="2500"><a href="#feedback">Contact</a></li>
                <li data-aos="fade-down" data-aos-duration="2600"><a href="#booking">Book a table</a></li>

            </ul>

            <div class="h-icons" data-aos="fade-down" data-aos-duration="2600">
                <a href="./frontend/login.html" > <i class="fas fa-user"></i></a>
                <a   onclick="opens()"> <i class="fa fa-search"></i></a>
               <a  onclick="open_side_nav()" ><i  class="fas fa-shopping-cart"></i></a> 
            </div>
            <div class="white-box">
                <a onclick="openb()"><i class="fas fa-bars"></i></a>
                <a onclick="opens()"> <i class="fa fa-search"></i></a>
            </div>
        </div>
        <div class="header-contents">
            <div class="social-icon" data-aos="zoom-out-right" data-aos-duration="2600"> <a
                    href="https://www.facebook.com"><i class="fab fa-facebook"></i></a> <a
                    href="https://www.twitter.com"><i class="fab fa-twitter"></i></a> <a
                    href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="header-contents2" data-aos="fade-down" data-aos-duration="2650">
                <img  id="img-notfordesk"      src="./pics/phonebg-s.webp" alt="">
                <h2 class="h-2">Welcome to <span>Bean heaven</span></h2>
                <p style="margin-top: 30px;" class="notfordesk">At Bean Haven, we believe that every cup of coffee
                    should be an experience.</p>
                <p class="notforphone"    style="margin-bottom: 30px;" >At Bean Haven, we believe that every cup of coffee should be an experience.<br>
                    Our cozy atmosphere
                    and expertly brewed beverages offer the perfect escape<br> from the hustle and bustle</p>
                    <a href="#booking"  class="a-text" >Book Now</a>
            </div>
        </div>

    </header>

    <section class="product" id="product">
        <div class="headling-p">
            <h1> Our <span>Products</span></h1>
        </div>
        <div class="product-container">
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p1.png" alt="">
                <div class="content-p">
                    <h2>Arabica coffe </h2>
                    <br>
                    <p>Sourced from high altitudes, Arabica beans are prized for their smooth</p>
                    <h3>20$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-name="Product 1" data-img-p="./pics/p1.png"
                            data-price="20">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p2.png" alt="">
                <div class="content-p">
                    <h2>Boterd Coffee</h2>
                    <br>
                    <p>Unveiling the Secret Agitation for Enhanced Flavor</p>
                    <h3>40$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-img-p="./pics/p2.png" data-name="Product 2"
                            data-price="40">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p3.png" alt="">
                <div class="content-p">
                    <h2>PatchRoast coffe </h2>
                    <br>
                    <p>Revolutionizing Your Morning Brew with Precision Craftsmanship</p>
                    <h3>60$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-img-p="./pics/p3.png" data-name="PatchRoast Coffee"
                            data-price="60">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p4.png" alt="">
                <div class="content-p">
                    <h2>SacredGrounds Coffee </h2>
                    <br>
                    <p>Brewing Tales of Haunted Coffee Plantations</p>
                    <h3>25$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-name="SacredGrounds Coffee" data-img-p="./pics/p4.png"
                            data-price="25">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p5.png" alt="">
                <div class="content-p">
                    <h2>Arabica coffee</h2>
                    <br>
                    <p>Sourced from high altitudes, Arabica beans are prized for their smooth</p>
                    <h3>30$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-name="Arabica coffee" data-img-p="./pics/p5.png"
                            data-price="30">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>

                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p6.png" alt="">
                <div class="content-p">
                    <h2>Arabica coffee</h2>
                    <br>
                    <p>Sourced from high altitudes, Arabica beans are prized for their smooth</p>
                    <h3>20$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-name="Arabica Coffee" data-img-p="./pics/p6.png"
                            data-price="20">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>

                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p1.png" alt="">
                <div class="content-p">
                    <h2>Arabica coffee</h2>
                    <br>
                    <p>Sourced from high altitudes, Arabica beans are prized for their smooth</p>
                    <h3>20$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-img-p="./pics/p1.png" data-name="Arabica Coffee"
                            data-price="20">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
            <div class="products-1" data-aos="zoom-in" data-aos-duration="1000">
                <img src="./pics/p2.png" alt="">
                <div class="content-p">
                    <h2>Boterd Coffee</h2>
                    <br>
                    <p>Unveiling the Secret Agitation for Enhanced Flavor</p>
                    <h3>20$</h3>
                    <div class="button-container">
                        <button>Oder Now</button>
                        <button class="add-to-cart" data-img-p="./pics/p2.png" data-name="Boterd"
                            data-price="20">add to cart </button>
                    </div>
                    <div class="content-i">
                        <i class="fas fa-heart"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="aboutus-container">
            <div class="row">
                <div class="col" data-aos="zoom-in-right" data-aos-duration="1000">
                    <img src="./pics/2632560." alt="">
                </div>
                <div class="col-2" data-aos="zoom-in-left" data-aos-duration="1000">
                    <div class="col-2-container">
                        <h1 style="font-size: 40px; padding-left: 10px;padding-bottom: 5px;">About us</h1>
                        <p>At our Coffe Shop, we source the finest beans from sustainable farms around the world. Each
                            cup is crafted with love and care by our expert baristas, ensuring that every sip is a
                            perfect blend of rich flavors and aromas.
                            <br> <br>Whether you prefer a robust espresso, a silky latte, or a refreshing cold brew, we
                            have something to delight your taste buds
                            But we're more than just coffee. Our cozy ambiance, filled with the aroma of freshly brewed
                            coffee and the sounds of cheerful chatter, makes us a favorite spot for friends, families,
                            and individuals seeking a moment of peace. We believe in fostering a sense of community,
                            where everyone feels welcome and valued.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="feedback" style="margin-top: 50px;" id="feedback">

        <div class="feedback-container" style="margin-top: 50px;">
            <h2>Any Doubts <span style="color: #D2B48C;">Clarify</span> Here</h2>
            <div class="feedback-input">
                <input type="text">
                <button>Enter</button>
            </div>
        </div>
    </section>
    <section class="booking-c" id="booking" style="background-color:#D2B48C;" style="padding-top: 40px;">
        <section class="booking">
            <div class="form-container">
                <form id="booking-form" action="./backend/bookingdetails.php" method="post">
                    <h1 style="text-align: center;">Make Your <span>Coffee</span> Moments Special <br> Reserve Your
                        Table! </h1>
                    <div class="row-b">
                        <div class="col-1">
                            <div class="form-grp">
                                <span>First Name</span>
                                <input required name="fn" type="text">
                            </div>
                            <div class="form-grp">
                                <span>Last Name</span>
                                <input required name="ln" type="text">
                            </div>
                            <div class="form-grp">
                                <span>Date Of Booking</span>
                                <input required type="datetime-local" name="dt">
                            </div>
                        </div>
                        <div class="col-2">
                        <div class="form-grp">
                                <span>How Many Member</span>
                                <input required max="10" min="1" name="mb" type="number">
                            </div>
                            <div class="form-grp">
                                <span>Phone Number</span>
                                <input required type="tel" name="phonenumber" pattern="[0-9]{10}"
                                    placeholder="9876543210">
                                    <?php if (isset($_GET['error'])) { echo "<p style='color: red;'>" . $_GET['error'] . "</p>"; } ?>
                            </div>
                            <div class="form-grp">
                                <span>Coffee Name</span>
                                <select id="coffee" name="cn" required>
                                    <option value="Espresso">Espresso</option>
                                    <option value="Cappuccino">Cappuccino</option>
                                    <option value="Latte">Latte</option>
                                    <option value="Americano">Americano</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="button-f">
                        <button type="submit">Submit</button>
                    </div>
                </form>

            </div>
        </section>
    </section>


    <section class="footer">

        <div class="footer-container">
            <div class="footer-1" data-aos="fade-zoom-in">
                <img src="./pics/logo.png" style="height: 140px;" alt="">
                <br>
                <p>Thanks for visiting us! <br>Happy Coffee Day!</p>
            </div>
            <div class="footer-1" data-aos="fade-zoom-in">
                <h2>Extra Links</h2>
                <a href="#">Payment Method<i class="fas fa-arrow-right"></i></a>
                <a href="#">Acc info <i class="fas fa-arrow-right"></i></a>
                <a href="#">About us <i class="fas fa-arrow-right"></i></a>
                <a href="#">Login <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="footer-1" data-aos="fade-zoom-in">
                <h2> Quick Links</h2>
                <a href="#">Home <i class="fas fa-arrow-right"></i></a>
                <a href="#">product <i class="fas fa-arrow-right"></i></a>
                <a href="#">Feedback <i class="fas fa-arrow-right"></i></a>
                <a href="#">Booking <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="footer-1" data-aos="fade-zoom-in">
                <h2>Contact Info</h2>
                <p>91+8072622991</p>
                <a href="#">www.BeanHeaven.com</a>
            </div>

        </div>
        <div class="footer-i">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook"></i>
        </div>


    </section>
    <script>
        const bin = document.getElementById("overlayblack");
        const din = document.getElementById("overlaybox");
        function opens() {
            bin.style.display = "block"
            din.style.display = "block";
        }
        function closes() {
            bin.style.display = "none"
            din.style.display = "none";

        }

        const open_n = document.getElementById("open-nav");


        function openb() {
            open_n.style.left = '-1%';

        }

        function closeb() {
            open_n.style.left = '-90%';

        }

        AOS.init();
        document.addEventListener('DOMContentLoaded', () => {
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartItems = document.getElementById('cart-items');
            const totalPriceElement = document.getElementById('total-price');
            const cartSidebar = document.getElementById('cart-sidebar');
            let cart = [];
            let total = 0;

            addToCartButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const name = button.getAttribute('data-name');
                    const img = button.getAttribute('data-img-p');
                    const price = parseFloat(button.getAttribute('data-price'));
                    const existingItem = cart.find(item => item.name === name);

                    if (existingItem) {
                        existingItem.quantity += 1;
                        existingItem.totalPrice += price;
                        updateCartItem(existingItem);
                    } else {
                        const newItem = { name, img, price, quantity: 1, totalPrice: price };
                        cart.push(newItem);
                        addCartItem(newItem);
                    }

                    total += price;
                    totalPriceElement.textContent = `Total: $${total.toFixed(2)}`;
                    cartSidebar.classList.add('active');
                });
            });

            function addCartItem(item) {
                const listItem = document.createElement('li');
                 listItem.setAttribute('data-name', item.name); 
                 listItem.innerHTML = `<img src="${item.img}" alt="${item.name}"> ${item.name} - $${item.totalPrice.toFixed(2)
                 } (Quantity: ${item.quantity}) <button class="remove-from-cart" data-name="${item.name}">x</button>`;
                   cartItems.appendChild(listItem);
                    // Attach remove event listener to the remove button 
                 listItem.querySelector('.remove-from-cart').addEventListener('click', () => { removeCartItem(item.name); 

                 }); } 
                 function updateCartItem(item)
                  {
                     const listItem = cartItems.querySelector(`[data-name="${item.name}"]`); 
                     listItem.innerHTML = `<img src="${item.img}" alt="${item.name}"> ${item.name} - $${item.totalPrice.toFixed(2)} (Quantity: ${item.quantity}) <button class="remove-from-cart" data-name="${item.name}">x</button>`;
                      // Attach remove event listener to the remove button 
                      listItem.querySelector('.remove-from-cart').addEventListener('click', () => { removeCartItem(item.name); }); }
                       function removeCartItem(name) 
                       { 
                        const itemIndex = cart.findIndex(item => item.name === name);
                         if (itemIndex !== -1) {
                             const item = cart[itemIndex]; // Update total 
                             total -= item.totalPrice; totalPriceElement.textContent = `Total: $${total.toFixed(2)}`; 
                             // Remove item from cart array
                              cart.splice(itemIndex, 1); // Remove item from UI 
                              const listItem = cartItems.querySelector(`[data-name="${name}"]`);
                               if (listItem) { cartItems.removeChild(listItem); } // Hide cart sidebar if cart is empty 
                               if (cart.length === 0) { cartSidebar.classList.remove('active'); } } } });
                // Toggle sidebar functionality
                const side_open_nav = document.getElementById("add-to-cart-actived");
                const side_close = document.getElementById();

                function open_side_nav() {
                    side_open_nav.style.display = "block";
                }

                function close_nav_bar() {
                    side_open_nav.style.display = "none";
                }






    </script>

</body>


</html>