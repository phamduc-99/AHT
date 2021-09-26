@extends('backend/master')
@section('main')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Đơn hàng</li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách đơn đặt hàng đã xử lý</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <a href="{{route('order.index')}}" class="btn btn-warning"><span class="glyphicon glyphicon-gift"></span>Đơn Chưa
                                    xử lý</a>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID</th>
                                            <th>Tên khách hàng</th>
                                            <th>Email</th>
                                            <th>Sđt</th>
                                            <th>Địa chỉ</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $key=>$order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->user()->first()->fullname}}</td>
                                            <td>{{$order->user()->first()->email}}</td>
                                            <td>{{$order->user()->first()->phone}}</td>
                                            <td>{{$order->user()->first()->address}}</td>
                                            <td>{{$order->total}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->


    </div>
    <!--end main-->

@endsection
