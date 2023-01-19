<!-- ##### Шапка профиля - начало ##### -->
<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Первое меню -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Логотип -->
                <a class="nav-brand" href="{{route('home')}}"><img src="/img/core-img/logo.png" alt=""></a>
                <!-- Переключатель -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Меню-->
                <div class="classy-menu">
                    <!-- Закрытие -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Навигация -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('category')}}">Shop</a></li>
                                    <!-- <li><a href="single-product-details.html">Product Details</a></li> -->
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <!-- <li><a href="single-blog.html">Single Blog</a></li> -->
                                    <!-- <li><a href="regular-page.html">Regular Page</a></li> -->
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Shop</a>
                                <div class="megamenu">
                                    <ul class="single-mega dropdown">
                                        <li class="title">Category</li>
                                        @foreach($categories as $category)
                                        <li><a href="{{route('showCategory', $category->alias)}}">{{$category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Навигация конец -->
                </div>
            </nav>
            <!-- Шапка с кнопками-->
            <div class="header-meta d-flex clearfix justify-content-end ">
                <!-- Поиск -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Избранные -->
                <div class="favourite-area">
                    <a href="#" ><img src="/img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- Личный аккаунт -->
                <div class="user-login-info">
                    <a href="{{route('accIndex')}}"><img src="/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Корзина -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="/img/core-img/bag.svg" alt=""><span>{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity();}}</span></a>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Шапка профиля - конец ##### -->
    <!-- ##### Открытие боковой панели ##### -->
    <div class="cart-bg-overlay"></div>
    <div class="right-side-cart-area">
        <!-- Кнопка корзины -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img class="mt-4" src="/img/core-img/bag.svg" alt=""> <span>{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity();}}</span></a>
        </div>
        <div class="cart-content d-flex">
            <!-- Лист товаров -->
            <div class="cart-list">
                <!-- Товар -->
                @foreach($cart as $item)
                <div class="single-cart-item ff">
                    <a href="#" class="product-image " >
                        <!-- <img src="/img/product-img/fon.webp" class="cart-thumb" alt=""> -->
                        <!-- Описание товара -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><a href="{{route('removeCart', ['id' => $item->id])}}"><i class="fa fa-close" aria-hidden="true"></i></a></span>
                            <span class="badge">Ksyusha Beauty</span>
                            <h6>{{$item->name}}</h6>
                            <!-- <p class="size">Size: S</p> -->
                            <p class="size">Qty: {{$item->quantity}}</p>
                            <p class="price">${{$item->price}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <!-- Чек-лист по ценам -->
            <div class="cart-amount-summary">
                <h2>Check List</h2>
                <ul class="summary-table">
                    <!-- <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li> -->
                    <li><span>total:</span> <span>${{$sum}}</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="{{route('checkOut')}}" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец боковой панели ##### -->