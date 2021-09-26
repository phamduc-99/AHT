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
                        <li>checkout</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--Checkout page section-->
    <div class="container">
            <div class="checkout_form">
                <form method="POST" action="{{ route('cart.payment') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-6 col-md-6">

                            <h3>Billing Details</h3>
                            <div class="row">
                                <form action="">
                                    <div class="col-lg-12 mb-30">
                                        <label>Email <span>*</span></label>
                                        <input type="text" name="email" value = "{{ Auth::user()->email }}">
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" name="fullname" value = "{{ Auth::user()->fullname }}">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <label>Address</label>
                                        <input type="text" name="address" value = "{{ Auth::user()->address }}">
                                    </div>
                                    <div class="col-lg-6 mb-30">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone" value = "{{ Auth::user()->phone }}">

                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3>Your order</h3>
                            <div class="order_table table-responsive mb-30">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (session('cart') as $slug => $detail)
                                            <tr>
                                                <td>{{ $detail['name'] }}<strong> × {{ $detail['quantity'] }}</strong>
                                                </td>
                                                <td>{{ $detail['quantity'] * $detail['price'] }} </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Cart Subtotal</th>
                                            <td>
                                                {{ session('money')['total'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Discount</th>
                                            <td><strong>{{ session('money')['voucher'] }}%</strong></td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Order Total</th>
                                            <td><strong>{{ session('money')['total_final'] }}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="order_button">
                                <button type="submit">Payment</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
    <!--Checkout page section end-->
    </div>
    </div>
    <!--pos page inner end-->
    </div>
    </div>
    <!--pos page end-->

@endsection
