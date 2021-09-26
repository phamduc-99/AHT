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
                        <li>my account</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- Start Maincontent  -->
    <div class="container">
    <section class="main_content_area">
        <div class="account_dashboard">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Account</a></li>
                            <li> <a href="#orders" data-toggle="tab" class="nav-link ">Orders</a></li>
                            <li><a href="{{route('user.logout')}}" class="nav-link">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="panel-body">
                                <strong><span class="glyphicon glyphicon-user"
                                        aria-hidden="true"></span>Name : {{$user->fullname}}</strong> <br>
                                <strong><span class="glyphicon glyphicon-phone"
                                        aria-hidden="true"></span>Phone : {{$user->phone}}</strong>
                                <br>
                                <strong><span class="glyphicon glyphicon-send"
                                        aria-hidden="true"></span>Address : {{$user->address}}</strong>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h3>Orders</h3>
                            <div class="coron_table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $key=>$order)
                                        <tr>
                                            <td>
                                                @foreach($order->orderdetail as $key=>$detail)
                                                    <p>{{$detail->name}}  x{{$detail->quantity}}</p>
                                                @endforeach
                                            </td>
                                            <td>{{$detail->created_at}}</td>
                                            <td><span class="success">
                                                @if($order->state == 1) Đơn đã giao
                                                @else Đang xử lí
                                                @endif
                                            </span></td>
                                            <td>{{$order->total}}</td>
                                            <td><a href="#" class="view">view</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Maincontent  -->
    </div>
    </div>
    <!--pos page inner end-->
    </div>
    </div>
    <!--pos page end-->

@endsection
