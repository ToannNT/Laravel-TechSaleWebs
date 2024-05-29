<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xác thực email</title>
</head>

<body>
    <h1>Xin chào, {{ $user->name }}</h1>
    <p>Vui lòng nhấn vào liên kết dưới đây để xác thực email của bạn:</p>
    <a href="{{ url('verify-email/' . $user->id . '/' . $user->verification_token) }}">Xác thực email</a>
</body>

</html>
