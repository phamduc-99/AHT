@extends('frontend\master')
@section('main')
    <div class="container">
        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--breadcrumbs area end-->

        <!--pos home section-->

        <div class=" pos_home_section" style="margin-top:25px">
            <div class="row pos_home">
                <div class="col-lg-3 col-md-12">
                    <!--layere categorie"-->
                    
                    


                    <!--popular tags area-->
                    <div class="sidebar_widget tags  mb-30">
                        <div class="block_title">
                            <h3>popular tags</h3>
                        </div>
                        <div class="block_tags">
                            @foreach($categories as $key=>$category)
                            <a href="{{route('product.show',['categoryName' => $category->name])}}">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                    <!--popular tags end-->

                    <!--newsletter block start-->
                    <div class="sidebar_widget newsletter mb-30">
                        <div class="block_title">
                            <h3>newsletter</h3>
                        </div>
                        <form action="#">
                            <p>Sign up for your newsletter</p>
                            <input placeholder="Your email address" type="text">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                    <!--newsletter block end-->

                    <!--special product start-->
                    <div class="sidebar_widget special">
                        <div class="block_title">
                            <h3>Special Products</h3>
                        </div>
                        <div class="special_product_inner mb-20">
                            <div class="special_p_thumb">
                                <a href="single-product.html"><img src="assets\img\cart\cart3.jpg" alt=""></a>
                            </div>
                            <div class="small_p_desc">
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                <div class="special_product_proce">
                                    <span class="old_price">$124.58</span>
                                    <span class="new_price">$118.35</span>
                                </div>
                            </div>
                        </div>
                        <div class="special_product_inner">
                            <div class="special_p_thumb">
                                <a href="single-product.html"><img src="assets\img\cart\cart18.jpg" alt=""></a>
                            </div>
                            <div class="small_p_desc">
                                <div class="product_ratting">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h3><a href="single-product.html">Printed Summer</a></h3>
                                <div class="special_product_proce">
                                    <span class="old_price">$124.58</span>
                                    <span class="new_price">$118.35</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--special product end-->


                </div>
                <div class="col-lg-9 col-md-12">
                    <!--banner slider start-->
                    <div class="banner_slider mb-35">
                        <img src="assets\img\banner\bannner10.jpg" alt="">
                    </div>
                    <!--banner slider start-->

                    <!--shop tab product-->
                    <div class="shop_tab_product">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="large" role="tabpanel">
                                <div class="row">
                                    @foreach($products as $key=>$product)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="{{route('product.detail', ['slug' => $product->slug])}}"><img src="../image/{{$product->image()->first()->img}}"
                                                        alt=""></a>
                                                <div class="img_icone">
                                                    @if($product->featured == 2)
                                                    <img src="assets\img\cart\span-new.png" alt="">
                                                    @elseif($product->featured == 2)
                                                    <img src="assets\img\cart\span-hot.png" alt="">
                                                    @endif
                                                </div>
                                                <div class="product_action">
                                                    <a href="{{route('cart.add', ['slug' => $product->slug])}}"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price">
                                                    @if ($product->discount > 0)                                                                      
                                                        <p class="item-content-price-special">{{ number_format($product->discount, 0, '', '.') }}</p>
                                                    @else
                                                        <p class="item-content-price-special">{{ number_format($product->price, 0, '', '.') }}</p>
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    <li><a href="{{route('cart.add', ['slug' => $product->slug])}}" title=" Add to Wishlist ">Add to cart</a></li>
                                                    <li><a href="{{route('product.detail', ['slug' => $product->slug])}}" data-toggle="modal" data-target="#modal_box"
                                                            title="Quick view">View Detail</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <!--shop tab product end-->

                    <!--pagination style start-->
                    <div class="pagination_style">
                        <div class="item_page">
                            <form action="#">
                                <label for="page_select">show</label>
                                <select id="page_select">
                                    <option value="1">9</option>
                                    <option value="2">10</option>
                                    <option value="3">11</option>
                                </select>
                                <span>Products by page</span>
                            </form>
                        </div>
                        <div class="page_number">
                            <span>Pages: </span>
                            <ul>
                                <li>«</li>
                                <li class="current_number">1</li>
                                <li><a href="#">2</a></li>
                                <li>»</li>
                            </ul>
                        </div>
                    </div>
                    <!--pagination style end-->
                </div>
            </div>
        </div>
        <!--pos home section end-->
    </div>
    <!--pos page inner end-->
    </div>
    </div>
    </div>
    <!--pos page end-->
@endsection
