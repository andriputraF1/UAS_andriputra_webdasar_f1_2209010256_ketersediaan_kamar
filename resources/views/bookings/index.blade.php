<!DOCTYPE html>
<html>
<head>
    <title>Bookings</title>
</head>
<body>
    <h1>Booking List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Room ID</th>
                <th>Patient Name</th>
                <th>Check In</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->patient_name }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>
                        <!-- Add your action buttons or links here -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
