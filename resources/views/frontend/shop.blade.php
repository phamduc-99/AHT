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
                        
                        <div class=" pos_home_section">
                            <div class="row pos_home">
                                    <div class="col-lg-3 col-md-12">
                                       <!--layere categorie"-->
                                          <div class="sidebar_widget shop_c">
                                                <div class="categorie__titile">
                                                    <h4>Categories</h4>
                                                </div>
                                                <div class="layere_categorie">
                                                    <ul>
                                                        <li>
                                                            <input id="acces" type="checkbox">
                                                            <label for="acces">Accessories<span>(1)</span></label>
                                                        </li>
                                                        <li>
                                                            <input id="dress" type="checkbox">
                                                            <label for="dress">Dresses <span>(2)</span></label>
                                                        </li>
                                                        <li>
                                                            <input id="tops" type="checkbox">
                                                            <label for="tops">Tops<span>(3)</span></label>
                                                        </li>
                                                        <li>
                                                            <input id="bag" type="checkbox">
                                                            <label for="bag">HandBags<span>(4)</span></label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <!--layere categorie end-->

                                        <!--color area start-->  
                                        <div class="sidebar_widget color">
                                            <h2>Color</h2>
                                             <div class="widget_color">
                                                <ul>

                                                    <li><a href="#">Black <span>(10)</span></a></li>

                                                    <li><a href="#">Orange <span>(12)</span></a></li>

                                                    <li> <a href="#">Blue <span>(14)</span></a></li>

                                                    <li><a href="#">Yellow <span>(15)</span></a></li>

                                                    <li><a href="#">pink <span>(16)</span></a></li>

                                                    <li><a href="#">green <span>(11)</span></a></li>

                                                </ul>
                                            </div>
                                        </div>                 
                                        <!--color area end--> 

                                        <!--price slider start-->                                     
                                        <div class="sidebar_widget price">
                                            <h2>Price</h2>
                                            <div class="ca_search_filters">

                                                <input type="text" name="text" id="amount">  
                                                <div id="slider-range"></div> 
                                            </div>
                                        </div>                                                       
                                        <!--price slider end-->

                                        <!--wishlist block start-->
                                        <div class="sidebar_widget wishlist mb-30">
                                            <div class="block_title">
                                                <h3><a href="#">Wishlist</a></h3>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="assets\img\cart\cart.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">lorem ipsum dolor</a>
                                                    <span class="cart_price">$115.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="cart_item">
                                               <div class="cart_img">
                                                   <a href="#"><img src="assets\img\cart\cart2.jpg" alt=""></a>
                                               </div>
                                                <div class="cart_info">
                                                    <a href="#">Quisque ornare dui</a>
                                                    <span class="cart_price">$105.00</span>
                                                    <span class="quantity">Qty: 1</span>
                                                </div>
                                                <div class="cart_remove">
                                                    <a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="block_content">
                                                <p>2  products</p>
                                                <a href="#">» My wishlists</a>
                                            </div>
                                        </div>
                                        <!--wishlist block end-->

                                        <!--popular tags area-->
                                        <div class="sidebar_widget tags  mb-30">
                                            <div class="block_title">
                                                <h3>popular tags</h3>
                                            </div>
                                            <div class="block_tags">
                                                <a href="#">ipod</a>
                                                <a href="#">sam sung</a>
                                                <a href="#">apple</a>
                                                <a href="#">iphone 5s</a>
                                                <a href="#">superdrive</a>
                                                <a href="#">shuffle</a>
                                                <a href="#">nano</a>
                                                <a href="#">iphone 4s</a>
                                                <a href="#">canon</a>
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

                                        <!--shop toolbar start-->
                                        <div class="shop_toolbar mb-35">
                                           
                                            <div class="list_button">
                                                <ul class="nav" role="tablist">
                                                    <li>
                                                        <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="page_amount">
                                                <p>Showing 1–9 of 21 results</p>
                                            </div>
                                            
                                            <div class="select_option">
                                                <form action="#">
                                                    <label>Sort By</label>
                                                    <select name="orderby" id="short">
                                                        <option selected="" value="1">Position</option>
                                                        <option value="1">Price: Lowest</option>
                                                        <option value="1">Price: Highest</option>
                                                        <option value="1">Product Name:Z</option>
                                                        <option value="1">Sort by price:low</option>
                                                        <option value="1">Product Name: Z</option>
                                                        <option value="1">In stock</option>
                                                        <option value="1">Product Name: A</option>
                                                        <option value="1">In stock</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                        <!--shop toolbar end-->

                                        <!--shop tab product-->
                                        <div class="shop_tab_product">   
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="large" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product1.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$50.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product2.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$40.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Quisque ornare dui</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product3.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$60.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product4.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$65.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Duis convallis</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product5.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$50.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product6.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$40.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Quisque ornare dui</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product7.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$60.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Sed non turpiss</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product8.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$65.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Duis convallis</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product9.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                   <div class="product_action">
                                                                       <a href="#"> <i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                   </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price">$50.00</span>
                                                                    <h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="#" title=" Add to Wishlist ">Add to Wishlist</a></li>
                                                                        <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view">View Detail</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                                <div class="tab-pane fade" id="list" role="tabpanel">
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product2.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select" type="checkbox">
                                                                        <label for="select">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product3.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                               <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Quisque ornare dui</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select1" type="checkbox">
                                                                        <label for="select1">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product4.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Maecenas sit amet</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select2" type="checkbox">
                                                                        <label for="select2">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product5.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Sed non luctus turpis</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select3" type="checkbox">
                                                                        <label for="select3">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product6.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Donec dignissim eget</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select4" type="checkbox">
                                                                        <label for="select4">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product7.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select5" type="checkbox">
                                                                        <label for="select5">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product8.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Donec ac congue</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select6" type="checkbox">
                                                                        <label for="select6">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product9.jpg" alt=""></a> 
                                                                   <div class="hot_img">
                                                                       <img src="assets\img\cart\span-hot.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Curabitur sodales</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select7" type="checkbox">
                                                                        <label for="select7">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <div class="product_list_item mb-35">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                                <div class="product_thumb">
                                                                   <a href="single-product.html"><img src="assets\img\product\product1.jpg" alt=""></a> 
                                                                   <div class="img_icone">
                                                                       <img src="assets\img\cart\span-new.png" alt="">
                                                                   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                                <div class="list_product_content">
                                                                   <div class="product_ratting">
                                                                       <ul>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                           <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                                       </ul>
                                                                   </div>
                                                                    <div class="list_title">
                                                                        <h3><a href="single-product.html">Lorem ipsum dolor</a></h3>
                                                                    </div>
                                                                    <p class="design"> in quibusdam accusantium qui nostrum consequuntur, officia, quidem ut placeat. Officiis, incidunt eos recusandae! Facilis aliquam vitae blanditiis quae perferendis minus eligendi</p>

                                                                    <p class="compare">
                                                                        <input id="select8" type="checkbox">
                                                                        <label for="select8">Select to compare</label>
                                                                    </p>
                                                                    <div class="content_price">
                                                                        <span>$118.00</span>
                                                                        <span class="old-price">$130.00</span>
                                                                    </div>
                                                                    <div class="add_links">
                                                                        <ul>
                                                                            <li><a href="#" title="add to cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#" title="add to wishlist"><i class="fa fa-heart" aria-hidden="true"></i></a></li>

                                                                            <li><a href="#" data-toggle="modal" data-target="#modal_box" title="Quick view"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
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
