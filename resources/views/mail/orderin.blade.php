<h2>New order received</h2>
<h2>Client:</h2>
<p>
    name: {{$user['name']}} <br>
    email: {{$user['email']}}<br>
    phone: {{$user['phone']}}
</p>

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>
                        <!-- так добавляем товар в корзину -->
                        <ul class="order-details-form mb-4">
                            @foreach($cart as $item)
                            <li><span>Product:</span> <span>{{$item->name}}</span></li>                            
                            <li><span>Subtotal:</span> <span>${{$item->price}}</span></li>
                            <li><span>Quantity:</span> <span>{{$item->quantity}}</span></li>
                            @endforeach
                            <!-- общая сумма -->
                            <br><li><span>Total</span> <span>${{$sum}}</span></li>
                        </ul>
