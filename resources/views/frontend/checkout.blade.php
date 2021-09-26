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
        <div class="Checkout_section">
            <div class="row">
                <div class="col-12">
                    <div class="user-actions mb-20">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login"
                                aria-expanded="true">Click here to login</a>

                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#accordion">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you
                                    are a new customer please proceed to the Billing & Shipping section.</p>
                                <form method="POST" action="{{route('user.login')}}">
                                    @csrf
                                    <div class="form_group mb-20">
                                        <label>Email <span>*</span></label>
                                        <input type="text" name="email">
                                    </div>
                                    <div class="form_group mb-25">
                                        <label>Password <span>*</span></label>
                                        <input type="text" name="password">
                                    </div>
                                    @if(session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                    @endif
                                    <div class="form_group group_3 ">
                                        <input value="Login" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="checkout_form">
                <form method="POST" action="{{ route('cart.payment') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-6 col-md-6">

                            <h3>Billing Details</h3>
                            <div class="row">
                                <form action="">
                                    
                                    <div class="col-lg-12 mb-30">
                                        <label>Full Name <span>*</span></label>
                                        <input type="text" name="fullname">
                                    </div>
                                    @if ($errors->has('fullname'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('fullname') }}</strong>
                                        </div>
                                    @endif
                                    <div class="col-12 mb-30">
                                        <label>Address</label>
                                        <input type="text" name="address">
                                    </div>
                                    @if ($errors->has('address'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </div>
                                    @endif
                                    <div class="col-lg-6 mb-30">
                                        <label>Phone<span>*</span></label>
                                        <input type="text" name="phone">

                                    </div>
                                    @if ($errors->has('phone'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </div>
                                    @endif
                                    <div class="col-lg-6 mb-30">
                                        <label> Email Address <span>*</span></label>
                                        <input type="text" name="email">

                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                    <div class="col-lg-6 mb-30">
                                        <label>Password<span>*</span></label>
                                        <input type="password" name="password">

                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
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
