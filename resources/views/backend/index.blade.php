<!-- resources/views/customers/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Optional: Link to your CSS -->
</head>
<body>
    <div class="container">
        <h1>Chi tiết khách hàng  </h1>

        <!-- Check if customer data is available -->
        @if($customers->isNotEmpty())
            @foreach($customers as $customer)
                <div class="customer-details">
                    <p><strong>Name:</strong> {{ $customer->name }}</p>
                    <p><strong>Email:</strong> {{ $customer->email }}</p>
                    <p><strong>Phone Number:</strong> {{ $customer->phone_number }}</p>
                </div>
                <hr> <!-- Optional: Add a horizontal line between customers -->
            @endforeach
        @else
            <p>No customer details available.</p>
        @endif

        <a href="{{ route('index') }}">quay lai</a>
    </div>
</body>
</html>
