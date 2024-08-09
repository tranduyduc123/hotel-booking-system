<!DOCTYPE html>
<html>
<head>
    <title>Hệ Thống Đặt Phòng Khách Sạn</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Tùy chọn: Liên kết đến CSS của bạn -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Hệ Thống Đặt Phòng Khách Sạn</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Khách Hàng</h5>
                        <p class="card-text">Xem và quản lý tất cả khách hàng.</p>
                        <a href="{{ route('customers') }}" class="btn btn-primary">Đi đến Khách Hàng</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Phòng</h5>
                        <p class="card-text">Xem và quản lý tất cả phòng.</p>
                        <a href="{{ route('rooms') }}" class="btn btn-primary">Đi đến Phòng</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Đơn Đặt Phòng</h5>
                        <p class="card-text">Xem và quản lý tất cả đơn đặt phòng.</p>
                        <a href="{{ url('/bookings') }}" class="btn btn-primary">Đi đến Đơn Đặt Phòng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
