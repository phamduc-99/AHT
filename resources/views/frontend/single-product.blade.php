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
                        <li>single product</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->


    <!--product wrapper start-->
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif
        <div class="product_details ">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="product_tab fix">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <?php
                                $images = $product->image;
                                $i = 1;
                                ?>
                                @foreach ($images as $key => $image)
                                    <li>
                                        <a @if ($i == 1)class="active" @endif data-toggle="tab" href="#p_tab{{ $i }}"
                                            role="tab" aria-controls="p_tab{{ $i }}" aria-selected="false"><img
                                                src="../image/{{ $image->img }}" alt=""></a>
                                    </li>
                                    <?php $i++; ?>
                                @endforeach

                            </ul>
                        </div>
                        <div class="tab-content produc_tab_c">
                            <?php
                            $i = 1;
                            ?>
                            @foreach ($images as $key => $image)
                                <div class="tab-pane fade show @if ($i == 1) active @endif" id="p_tab{{ $i }}"
                                    role="tabpanel">
                                    <div class="modal_img">
                                        <a href="#"><img src="../image/{{ $image->img }}" alt=""></a>
                                        <div class="img_icone">
                                            <img src="../image/{{ $image->img }}" alt="">
                                        </div>
                                        <div class="view_img">
                                            <a class="large_view" href="../image/{{ $image->img }}"><i
                                                    class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="product_d_right">
                        <h1>{{ $product->name }}</h1>
                        <div class="product_ratting mb-10">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <div class="product_desc">
                            <p>{{ $product->info }}</p>
                        </div>

                        <div class="content_price mb-15">
                            @if ($product->discount > 0)
                                <span>{{ number_format($product->discount, 0, '', '.') }}đ</span>
                                <span class="old-price">{{ number_format($product->price, 0, '', '.') }}</span>
                            @else
                                <span>{{ number_format($product->price, 0, '', '.') }}</span>
                            @endif
                        </div>
                        <div class="box_quantity mb-20">

                            <form method="POST" action="{{ route('cart.add.quantity', ['slug' => $product->slug]) }}">
                                @csrf
                                <label>quantity</label>
                                <input name="quantity" min="0" max="100" value="1" type="number">

                                <button type="submit"><i class="fa fa-shopping-cart"></i> add to cart</button>
                            </form>

                        </div>
                        <div class="product_d_size mb-20">
                            <label for="group_1">size</label>
                            <select name="size" id="group_1">
                                <option value="1">S</option>
                                <option value="2">M</option>
                                <option value="3">L</option>
                            </select>
                        </div>

                        <div class="wishlist-share">
                            <h4>Share on:</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--product details end-->


        <!--product info start-->
        <div class="product_d_info ">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a  data-toggle="tab" href="#info" role="tab" aria-controls="info"
                                        aria-selected="false">More info</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet"
                                        aria-selected="false">Data sheet</a>
                                </li>
                                <li>
                                    <a class="active" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show " id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{{ $product->describer }}</p>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="sheet" role="tabpanel">
                                <div class="product_d_table">
                                    <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Code</td>
                                                    <td>{{ $product->code }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Category</td>
                                                    <td>
                                                        @foreach ($product->category as $key => $category)
                                                            {{ $category->name }}
                                                            &nbsp;
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>
                                                        @if ($product->featured == 1)
                                                            Hot
                                                        @elseif($product->featured == 2)
                                                            New
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                                @php $comments = $product->comment @endphp
                                @foreach($comments as $key=>$comment)
                                <div class="product_info_inner">
                                    
                                    <div class="product_ratting mb-10">
                                    
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                        <strong>{{$comment->user()->first()->fullname}}</strong>
                                        <p>{{$comment->created_at}}</p>
                                    </div>
                                    <div class="product_demo">
                                        <p>{{$comment->content}}</p>
                                    </div>
                                    
                                </div>
                                @endforeach                          
                                <div class="product_review_form">
                                    <form method="POST" action="{{route('product.comment',['id'=>$product->id])}}">
                                        @csrf
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Your review </label>
                                                <textarea name="content" id="review_comment"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product info end-->


        <!--new product area start-->
        <div class="container new_product_area product_page ">
            <div class="row">
                <div class="col-12">
                    <div class="block_title">
                        <h3> other products category:</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="single_p_active owl-carousel">
                    @foreach ($cateproducts as $key => $cateproduct)
                        @if ($cateproduct->id != $product->id)
                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product.detail', ['slug' => $cateproduct->slug]) }}"><img
                                                src="../image/{{ $cateproduct->image()->first()->img }}" alt=""></a>

                                    </div>
                                    <div class="product_content">
                                        @if ($cateproduct->discount > 0)
                                            <span
                                                class="product_price">{{ number_format($cateproduct->discount, 0, '', '.') }}</span>
                                        @else
                                            <span
                                                class="product_price">{{ number_format($cateproduct->price, 0, '', '.') }}</span>
                                        @endif
                                        <h3 class="product_title">{{ $cateproduct->name }}</h3>
                                    </div>
                                    <div class="product_info">
                                        <ul>
                                            <li><a href="{{ route('cart.add', ['slug' => $cateproduct->slug]) }}" title=" Add to cart ">Add to Cart</a></li>
                                            <li><a href="{{ route('product.detail', ['slug' => $cateproduct->slug]) }}"
                                                    data-toggle="modal" data-target="#modal_box" title="Quick view">View
                                                    Detail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!--new product area start-->


        <!--new product area start-->
        <div class="new_product_area product_page">
            <div class="row">
                <div class="col-12">
                    <div class="block_title">
                        <h3> New Products</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="single_p_active owl-carousel">
                    @foreach ($newproducts as $key => $newproduct)
                        <div class="col-lg-3">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product.detail', ['slug' => $newproduct->slug]) }}"><img
                                            src="../image/{{ $newproduct->image()->first()->img }}" alt=""></a>

                                </div>
                                <div class="product_content">
                                    @if ($product->discount > 0)
                                        <span
                                            class="product_price">{{ number_format($newproduct->discount, 0, '', '.') }}</span>
                                    @else
                                        <span
                                            class="product_price">{{ number_format($newproduct->price, 0, '', '.') }}</span>
                                    @endif
                                    <h3 class="product_title">{{ $newproduct->name }}</h3>
                                </div>
                                <div class="product_info">
                                    <ul>
                                        <li><a href="{{ route('cart.add', ['slug' => $cateproduct->slug]) }}" title=" Add to cart ">Add to Cart</a></li>
                                        <li><a href="{{ route('product.detail', ['slug' => $newproduct->slug]) }}"
                                                data-toggle="modal" data-target="#modal_box" title="Quick view">View
                                                Detail</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--new product area start-->

    </div>
    <!--pos page inner end-->
    </div>
    </div>
    </div>
@endsection
