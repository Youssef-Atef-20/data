<?php



$hotel = [
    1 => "Ocean Pearl Hotel",
    2 => "Royal Palm Resort",
    3 => "Sunset Paradise Hotel"
];


$roomType = [
    1 => "Deluxe Room",
    2 => "Family Suite",
    3 => "Luxury Suite",
    4 => "Beach View Room"
];

$connection = mysqli_connect("sql203.infinityfree.com", "if0_41784483", "Yousefatef1212", "if0_41784483_hotel");
// Host                    Username          password        Database Name



if (!$connection) {
    echo "The Database Didn't Connect Successfully";
}

$sql = "SELECT * FROM bookings";


$result = mysqli_query($connection, $sql);


$table = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/svg+xml" href="icon.svg">
    <title>Data Base of Bookings</title>
</head>



<body>
    <h1>Bookings Table</h1>

    <table>
        <tr>

            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Hotel</th>
            <th>Room Type</th>
            <th>No. of Guests</th>
            <th>Check In Date</th>
            <th>Check Out Date</th>

        </tr>

        <?php

        foreach ($table as $row) {
            echo "<tr>";


            echo "<td>{$row['full_name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td>{$hotel[$row['hotel_id']]}</td>";
            echo "<td>{$roomType[$row['room_id']]}</td>";
            echo "<td>{$row['guests']}</td>";
            echo "<td>{$row['check_in']}</td>";
            echo "<td>{$row['check_out']}</td>";


            echo "</tr>";

        }



        ?>





    </table>
</body>

</html>