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
                        <li>login</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- customer login start -->
    <div class="container">
    <div class="customer_login">
        <div class="row">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                    <form method="POST" action="{{route('user.login')}}">
                        @csrf
                        <p>
                            <label>Username or email <span>*</span></label>
                            <input type="text" name="email">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                        </p>
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ session('error') }}</strong>
                        </div>
                        @endif
                        <div class="login_submit">
                            <button type="submit">login</button>
                        </div>

                    </form>
                </div>
            </div>
            <!--login area start-->

            <!--register area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                    <h2>Register</h2>
                    <form method="POST" action="{{route('user.register')}}">
                        @csrf
                        <p>
                            <label>Email address <span>*</span></label>
                            <input type="text" name="email">
                        </p>
                        @if ($errors->has('email'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                        </p>
                        @if ($errors->has('password'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif
                        <p>
                            <label>Fullname <span>*</span></label>
                            <input type="text" name="fullname">
                        </p>
                        @if ($errors->has('fullname'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('fullname') }}</strong>
                            </div>
                        @endif
                        <p>
                            <label>Address <span>*</span></label>
                            <input type="text" name="address">
                        </p>
                        @if ($errors->has('address'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </div>
                        @endif
                        <p>
                            <label>Phone <span>*</span></label>
                            <input type="text" name="phone">
                        </p>
                        @if ($errors->has('phone'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </div>
                        @endif
                        <div class="login_submit">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--register area end-->
        </div>
    </div>
    <!-- customer login end -->
    </div>
    </div>
    <!--pos page inner end-->
    </div>
    </div>
    <!--pos page end-->

@endsection
