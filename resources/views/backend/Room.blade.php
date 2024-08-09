<!DOCTYPE html>
<html>
<head>
    <title>Rooms List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional: Link to your CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Danh sách phòng</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số phòng</th>
                    <th>loại</th>
                    <th>Giá</th>
                    <!-- <th>Actions</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <td>{{ $room->room_number }}</td>
                        <td>{{ $room->type }}</td>
                        <td>{{ $room->price }}</td>
                        <!-- <td>
                            <a href="{{ url('/rooms/'.$room->id) }}" class="btn btn-info">View</a>
                        </td> -->
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/bookings') }}" class="btn btn-primary">View Bookings</a>
    </div>
</body>
</html>
