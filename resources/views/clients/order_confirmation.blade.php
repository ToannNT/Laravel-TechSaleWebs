<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xác nhận đơn hàng</title>
</head>

<body>
    <h1>Cảm ơn bạn đã mua hàng!</h1>
    <p>Mã hóa đơn của bạn là: <strong>{{ $bill->ma_hoadon }}</strong></p>
    <p>Thông tin đơn hàng của bạn như sau:</p>
    <ul>
        <li>Họ và tên: {{ $bill->ten_nguoidat }}</li>
        <li>Địa chỉ: {{ $bill->diachi_nguoidat }}</li>
        <li>Số điện thoại: {{ $bill->sdt_nguoidat }}</li>
        <li>Email: {{ $bill->email_nguoidat }}</li>
        <li>Tổng tiền: {{ number_format($bill->total, 0, ',', '.') }}₫</li>
    </ul>
    <p>Chi tiết đơn hàng:</p>
    <ul>
        @foreach ($bill->orderDetails as $detail)
            <li>{{ $detail->ten }} - {{ $detail->soluong }} x {{ number_format($detail->gia, 0, ',', '.') }}₫</li>
        @endforeach
    </ul>
    <p>Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận đơn hàng. Cảm ơn bạn đã mua hàng!</p>
</body>

</html>
