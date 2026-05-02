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
    <title>View Of Hotel Data Base</title>
</head>


<style>

:root {
    --primary: #0A192F;
    --primary-light: #112240;
    --secondary: #D4AF37;
    --secondary-light: #F9E596;
    --text-main: #CCD6F6;
    --text-muted: #8892B0;
    --bg-dark: #020c1b;
    --white: #FFFFFF;
    --glass-bg: rgba(10, 25, 47, 0.7);
    --glass-border: rgba(255, 255, 255, 0.1);
    --transition: all 0.4s ease;
}

body {
    background: var(--bg-dark);
    color: var(--text-main);
    font-family: Arial, sans-serif;
    padding: 40px;
    min-height: 100vh;
}

h1 {
    text-align: center;
    margin-bottom: 40px;
    color: var(--white);
    font-size: 3rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    position: relative;
}

h1::after {
    content: "";
    width: 120px;
    height: 4px;
    background: linear-gradient(
        90deg,
        transparent,
        var(--secondary),
        transparent
    );
    position: absolute;
    bottom: -15px;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: rgba(17, 34, 64, 0.55);
    backdrop-filter: blur(15px);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    overflow: hidden;
    box-shadow:
        0 20px 60px rgba(0,0,0,0.45),
        inset 0 1px 0 rgba(255,255,255,0.05);
}

th {
    background: rgba(212, 175, 55, 0.12);
    color: var(--secondary);
    padding: 22px;
    text-align: left;
    font-size: 1rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

td {
    padding: 20px 22px;
    color: var(--text-main);
    border-bottom: 1px solid rgba(255,255,255,0.05);
    transition: var(--transition);
    font-size: 0.96rem;
}

tr {
    transition: var(--transition);
}

tr:hover {
    background: rgba(212, 175, 55, 0.05);
}

tr:hover td {
    color: var(--white);
}

tr:last-child td {
    border-bottom: none;
}

table::before {
    content: "";
    position: absolute;
    inset: 0;
    pointer-events: none;
    border-radius: 20px;
}

@media (max-width: 1100px) {

    body {
        padding: 20px;
    }

    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }

    h1 {
        font-size: 2.2rem;
    }

    th,
    td {
        padding: 16px;
    }
}

</style>

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