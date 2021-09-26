@extends('frontend\master')
@section('main')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Shopping Cart</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->



    <!--shopping cart area start -->
    <div class="container">
        <div class="shopping_cart_area">

            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0 @endphp
                                        @if (session('cart'))
                                            @foreach (session('cart') as $slug => $detail)
                                                <tr data-slug="{{ $slug }}">
                                                    @php $total +=  $detail['price'] * $detail['quantity'] @endphp
                                                    <td class="product_remove"><a class="remove-cart"><i
                                                                class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href=""><img
                                                                src="../image/{{ $detail['image'] }}" alt=""></a></td>
                                                    <td class="product_name">{{ $detail['name'] }}</td>
                                                    <td class="product-price">{{ $detail['price'] }}</td>
                                                    <td class="product_quantity" data-th="Quantity">
                                                        <input type="number" value="{{ $detail['quantity'] }}"
                                                            class="form-control quantity update-cart" />
                                                    </td>
                                                    <td class="product_total">{{ $detail['price'] * $detail['quantity'] }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code">
                                <h3>Coupon</h3>
                                <div class="coupon_inner">
                                    @if (session('money')['voucher'] && session('money')['voucher'] < 0)
                                        <p>Mã giảm giá không hợp lê</p>
                                    @elseif(session('money')['voucher'] && session('money')['voucher']>0)
                                        <p>Áp dụng mã thành công</p>
                                    @else
                                        <p>Điền mã giảm giá</p>
                                    @endif
                                    <input id="code" placeholder="Coupon code" type="text">
                                    <button class="voucher">Apply voucher</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">{{ $total }}đ</p>
                                    </div>
                                    <div class="cart_subtotal ">
                                        <p>Discount</p>
                                        @php $voucher = 0;
                                            $money = session('money') ? session('money') : null;
                                        @endphp
                                        @if ($money['voucher'] && $money['voucher'] > 0)
                                            @php                                               
                                                $voucher = $money['voucher'];
                                            @endphp
                                        @endif
                                        <p class="cart_amount">{{ $voucher }} %</p>
                                    </div>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">{{ $total - ($total * $voucher) / 100 }}đ</p>
                                        @php
                                            $money = [
                                                'total' => $total,
                                                'voucher' => $voucher,
                                                'total_final' => $total - ($total * $voucher) / 100,
                                            ];
                                            session()->put('money', $money);
                                        @endphp
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="{{ route('cart.checkout') }}">Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
        <!--shopping cart area end -->
    </div>



@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(".update-cart").change(function(e) {

                var ele = $(this);

                $.ajax({
                    url: '{{ route('cart.update') }}',
                    type: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        slug: ele.parents("tr").attr("data-slug"),
                        quantity: ele.parents("tr").find(".quantity").val()
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
            $(".remove-cart").click(function(e) {

                var ele = $(this);


                $.ajax({
                    url: '{{ route('cart.remove') }}',
                    type: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        slug: ele.parents("tr").attr("data-slug"),
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            });
            $(".voucher").click(function(e) {
                e.preventDefault();
                var ele = $(this);

                $.ajax({
                    url: '{{ route('cart.voucher') }}',
                    type: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        voucher: document.getElementById('code').value
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });


            });
        });
    </script>
@endsection
