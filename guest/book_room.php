<?php
session_start();
include('../db_connection.php');

// Check if the user is logged in as a guest
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'guest') {
    header("Location: guest_login.php");
    exit();
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['room_id'])) {
    $username = $_SESSION['username'];
    $room_id = $_POST['room_id'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];

    // Insert the booking into the database
    $sql = "INSERT INTO room_bookings (username, room_id, check_in_date, check_out_date) VALUES ('$username', '$room_id', '$check_in_date', '$check_out_date')";

    if ($conn->query($sql) === TRUE) {
        $message = "Room booked successfully.";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Fetch all rooms from the database
$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Room</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('../img/room1.jpg') no-repeat center center fixed;
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
            color: #333;
        }

        .room {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .room img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 10px 0 0 10px;
        }

        .room div {
            padding: 20px;
            flex: 1;
        }

        .room h3 {
            margin-top: 0;
            color: #007BFF;
        }

        .room p {
            margin: 5px 0;
            color: #555;
        }

        .buttons {
            margin-top: 10px;
        }

        .buttons button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .buttons button:hover {
            background-color: #0056b3;
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
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .message {
            text-align: center;
            margin-bottom: 20px;
            color: green;
        }

        .error-message {
            text-align: center;
            margin-bottom: 20px;
            color: red;
        }
    </style>
</head>
<body>
    <a href="guest_home.php" class="back-button">Back</a>
    <div class="container">
        <h2>Book a Room</h2>

        <?php if ($message) { ?>
            <div class="<?php echo strpos($message, 'successfully') !== false ? 'message' : 'error-message'; ?>"><?php echo $message; ?></div>
        <?php } ?>

        <?php if ($result->num_rows > 0) { ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="room">
                    <img src="../img/<?php echo $row['image']; ?>" alt="Room <?php echo $row['id']; ?>">
                    <div>
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <p>Price: KES <?php echo $row['price']; ?> per night</p>
                        <div class="buttons">
                            <form method="post" action="">
                                <input type="hidden" name="room_id" value="<?php echo $row['id']; ?>">
                                <label for="check_in_date">Check-in Date:</label>
                                <input type="date" name="check_in_date" required>
                                <label for="check_out_date">Check-out Date:</label>
                                <input type="date" name="check_out_date" required>
                                <button type="submit">Book</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No rooms available at the moment.</p>
        <?php } ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>