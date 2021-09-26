@extends('frontend\master')
@section('main')
    <div class="main-content">

        <!-- Banner -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <!-- Banner left -->
                    <div class="banner-left">
                        <img src="image/banner_1.jpg" alt="">
                        <div class="banner-left-content">
                            <div class="banner-left-content-title">Two High-end Materials</div>
                            <a href="" class="banner-button">Shop Now</a>
                        </div>
                    </div>
                    <!-- End Banner left -->

                    <!-- Banner right -->
                    <div class="banner-right">
                        <div class="banner-right-col">
                            <div class="banner-right-col-item">
                                <img src="image/banner_2.jpg" alt="">
                                <div class="banner-right-col-item-content1">
                                    <div class="banner-right-title1">small thing</div>
                                    <div class="banner-right-title2">make different</div>
                                </div>
                            </div>
                            <div class="banner-right-col-item item2">
                                <img src="image/banner_3.jpg" alt="">
                                <div class="banner-right-col-item-content2">

                                    <div class="banner-right-title1">folio</div>
                                    <div class="banner-right-title2">backpack</div>
                                    <a href="" class="banner-button">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Banner right -->
                    <!-- End Banner right -->
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Item -->
        <div class="item">
            <div class="container">
                <!-- Title -->
                <div class="item-title">
                    <h4>Franco</h4>
                    <h1>featured items</h1>
                </div>
                <!-- End Title -->
                <!-- List Item -->
                <div class="content">
                    <!-- Item1 -->
                    <div class="row row1">
                        @foreach ($products as $key => $product)
                            <div class="item-content">
                                <div class="item-img">
                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}">
                                        <img src="../image/{{ $product->image()->orderBy('id')->first()->img }}" alt="">
                                    </a>
                                    <a class="button" href="{{ route('cart.add', ['slug' => $product->slug]) }}">add
                                        to cart</a>
                                        <div class="img_icone">
                                            @if($product->featured == 2)
                                            <img src="assets\img\cart\span-new.png" alt="">
                                            @elseif($product->featured == 1)
                                            <img src="assets\img\cart\span-hot.png" alt="">
                                            @endif
                                        </div>
                                </div>
                                <div class="item-content-title">{{ $product->name }}</a></div>
                                <div class="item-content-rate nnn">
                                    <ul>
                                        <li><span class="star far fa-star checked"></span></li>
                                        <li><span class="star far fa-star checked"></span></li>
                                        <li><span class="star far fa-star checked"></span></li>
                                        <li><span class="star far fa-star checked"></span></li>
                                        <li><span class="star far fa-star not-checked"></span></li>
                                    </ul>
                                </div>
                                <div class="item-content-price">
                                    @if ($product->discount > 0)
                                        <p class="item-content-price-old">{{ number_format($product->price, 0, '', '.') }}</p>
                                        <p class="item-content-price-special">
                                            {{ number_format($product->discount, 0, '', '.') }}</p>
                                    @else
                                        <p class="item-content-price-special">{{ number_format($product->price, 0, '', '.') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- End List Item -->
            </div>
        </div>
        <!-- End Item -->

        <!-- News & Events -->
        <div class="blog">
            <div class="container-fluid">
                <div class="blog-title">
                    <h4>Latest</h4>
                    <h1>News & Events</h1>
                </div>
                <div class="container blog-content">
                    <div class="owl-carousel owl-theme">
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-1.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">In commodo dolor vitae</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque, vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-2.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">Vivamus non dignissim elit</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque,vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer ">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-3.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">Ut lacinia erat ut diam volutpat</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque,vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer ">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-1.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">In commodo dolor vitae</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque, vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-2.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">Vivamus non dignissim elit</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque,vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer ">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-3.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">Ut lacinia erat ut diam volutpat</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque,vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer ">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-1.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">In commodo dolor vitae</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-2.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">Vivamus non dignissim elit</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque,vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer ">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-item item">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="image/blog-3.png" alt="Card image cap"></a>
                                <div class="box-date">
                                    <div class="box-date-content">
                                        <p class="month">Jan</p>
                                        <p class="date">23</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="card-title">Ut lacinia erat ut diam volutpat</a>
                                    <div class="blog-detail">Aliquam tempor sagittis neque,vel aliquam risus consectetur
                                        vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris</div>
                                </div>
                                <div class="blog-content-footer ">
                                    <a href="#" class="comment">
                                        <i class="far fa-comment"></i>
                                        <span>12</span>
                                    </a>
                                    <a href="#" class="like">
                                        <i class="far fa-heart icon"></i>
                                        <span>6</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
        <!-- End New & Event -->
    </div>
    <!-- End Main Content -->

@endsection
