<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
        <p>
        <b style="font-weight: bold;">Khách hàng: {{$data->user()->first()->fullname}}</b><br>
        <b>Điện thoại: {{$data->user()->first()->phone}}</b><br>
        <b>Địa chỉ: {{$data->user()->first()->address}}</b><br>
        </p>
        <table border="1" cellspacing="0" cellpadding="10" bordercolor="#305eb3" width="100%">
        <tr bgcolor="#305eb3">
            <td width="70%"><b><font color="#FFFFFF">Sản phẩm</font></b></td>
            <td width="10%"><b><font color="#FFFFFF">Số lượng</font></b></td>
            <td width="20%"><b><font color="#FFFFFF">Tổng tiền</font></b></td>
        </tr>
            @foreach($data->orderdetail as $key=>$detail)
            <tr>
            <td width="70%">{{$detail->name}} đ</td>
            <td width="10%">{{$detail->quantity}} đ</td>
            <td width="20%">{{$detail->quantity*$detail->price}} đ</td>
            </tr>
            @endforeach

        <tr>
            <td colspan="2" width="70%"></td>
            <td width="20%"><b><font color="#FF0000">{{$data->total}} đ</font></b></td>
        </tr>
        </table>
    <p>
        Cám ơn quý khách đã mua hàng tại Shop của chúng tôi, bộ phận giao hàng sẽ liên hệ với quý khách để xác nhận sau 5
        phút kể từ khi đặt hàng thành công và chuyển hàng đến quý khách chậm nhất sau 24 tiếng.
    </p>
</body>
</html>