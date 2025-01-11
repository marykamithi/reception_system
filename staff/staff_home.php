<?php
session_start();
include('../db_connection.php');

// Check if the user is logged in as staff
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'staff') {
    header("Location: staff_login.php");
    exit();
}

// Fetch service requests from the database
$sql_service_requests = "SELECT * FROM service_requests ORDER BY request_time DESC";
$result_service_requests = $conn->query($sql_service_requests);

// Fetch room bookings from the database
$sql_room_bookings = "SELECT rb.*, r.name AS room_name FROM room_bookings rb JOIN rooms r ON rb.room_id = r.id ORDER BY rb.check_in_date DESC";
$result_room_bookings = $conn->query($sql_room_bookings);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Home</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('../img/staff_home_bg.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            margin: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="../home.php" class="back-button">Back</a>
    <div class="container">
        <h2>Guest Service Requests</h2>
        <?php if ($result_service_requests->num_rows > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Service</th>
                        <th>Request Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result_service_requests->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['service']; ?></td>
                            <td><?php echo $row['request_time']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No service requests found.</p>
        <?php } ?>

        <h2>Rooms Booked</h2>
        <?php if ($result_room_bookings->num_rows > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Room</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result_room_bookings->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['room_name']; ?></td>
                            <td><?php echo $row['check_in_date']; ?></td>
                            <td><?php echo $row['check_out_date']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No room bookings found.</p>
        <?php } ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>