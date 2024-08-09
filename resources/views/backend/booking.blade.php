<!DOCTYPE html>
<html>
<head>
    <title>Bookings List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional: Link to your CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Danh sách phòng</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tên khách hàng</th>
                    <th>Số phòng</th>
                    <th>Ngày nhận phòng</th>
                    <th>Ngày trả phòng</th>
                    <th>Tổng số tiền phải thanh toán.</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->customer->name }}</td>
                        <td>{{ $booking->room->room_number }}</td>
                        <td>{{ $booking->check_in_date }}</td>
                        <td>{{ $booking->check_out_date }}</td>
                        <td>{{ $booking->total_amount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/customers') }}" class="btn btn-secondary">Quay lại danh sách khách hàng</a>
        <a href="{{ url('/rooms') }}" class="btn btn-secondary">Quay lại danh sách phòng</a>
    </div>
</body>
</html>
