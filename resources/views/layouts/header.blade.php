<!-- ##### Шапка профиля - начало ##### -->
<header class="header_area" style="margin: 0; padding:0;">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between" style="background-color: #d12cc1;">
            <!-- Первое меню -->
            <nav class="classy-navbar" id="essenceNav" style="border-bottom: none;">
                <!-- Логотип -->
                <a class="nav-brand" href="{{route('home')}}"><img style="width: 80px;" src="/img/products-img/logo.png" alt=""></a>
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
                    <div class="classynav" >
                        <ul>
                            <li><a href="#" style="color: black;">Pages</a>
                                <ul class="dropdown">
                                    <li><a  href="{{route('home')}}">Home</a></li>
                                    <li><a  href="{{route('category')}}">Shop</a></li>
                                    <!-- <li><a href="single-product-details.html">Product Details</a></li> -->
                                    <li><a  href="{{route('checkOut')}}">Checkout</a></li>
                                    <li><a  href="{{route('blog')}}">Blog</a></li>
                                    <!-- <li><a href="single-blog.html">Single Blog</a></li> -->
                                    <!-- <li><a href="regular-page.html">Regular Page</a></li> -->
                                    <li><a  href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </li>
                            
                                <li><a  style="color: black;"href="#">Shop</a>
                                
                                    <ul class="single-mega dropdown">
                                        <li style="text-align: center;" class="title">Category</li>
                                        @foreach($categories as $category)
                                        <li><a  href="{{route('showCategory', $category->alias)}}">{{$category->title}}</a></li>
                                        @endforeach
                                    </ul>
                                
                            </li>
                            <li><a style="color: black;" href="{{route('blog')}}">Blog</a></li>
                            <li><a style="color: black;" href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Навигация конец -->
                </div>
            </nav>
            <!-- Шапка с кнопками-->
            <div class="header-meta d-flex clearfix justify-content-end" >
                <!-- Поиск -->
                <!-- <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div> -->
                <!-- Избранные -->
                <!-- <div class="favourite-area">
                    <a href="#" ><img src="/img/core-img/heart.svg" alt=""></a>
                </div> -->
                <!-- Личный аккаунт -->
                <div class="user-login-info ">
                    <a href="{{route('accIndex')}}">
                        <img src="/img/core-img/user.svg" alt="">
                        
                    </a>
                </div>      
                <!-- Корзина -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="/img/core-img/bag.svg" alt=""><span style="color: white;">{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity();}}</span></a>
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
            <a href="#" id="rightSideCart"><img  class="mt-4" src="/img/core-img/bag.svg" alt=""> <span style="color: #d12cc1;" >{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity();}}</span></a>
        </div>
        <div class="cart-content d-flex">
            <!-- Лист товаров -->
            <div class="cart-list">
                <!-- Товар -->
                @foreach($cart as $item)
                <div class="single-cart-item"  >
                    <a href="#" class="product-image " >
                        <img style="height: 200px;" src="" class="cart-thumb" alt="" style="background-color: black;">
                        <!-- Описание товара -->
                        <div class="cart-item-desc mt-2 ">
                            <span style="max-width: 60%;" class="badge">Ksyusha Beauty</span>
                            <h6 style="font-size: 20px;">{{$item->name}}</h6>
                            <!-- <p class="size">Size: S</p> -->
                            
                            <p class="price">${{$item->price}}</p>
                        </div>
                    </a>
                </div>
                <div style="display:flex;">
                <!-- удаление товара -->
                <span class="product-remove" style="    margin: 0 auto;">
                    <a style=" text-decoration: none;"  href="{{route('removeCart', ['id' => $item->id])}}">
                        <!-- <i  class=" fa fa-close" aria-hidden="true"></i> -->
                        <p class="p-delete">Delete</p>
                    </a>
                </span>
                <span class="span-my">
                    <p class="size p-size" >Qty: {{$item->quantity}}</p>
                </span>
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
                    <a style="background-color: #d12cc1;" href="{{route('checkOut')}}" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Конец боковой панели ##### -->