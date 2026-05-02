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
    table {
        width: 100%;
        border-collapse: collapse;
        background: rgba(17, 34, 64, 0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
        margin-top: 40px;
    }

    h1 {
        text-align: center;
        margin-top: 40px;
        color: var(--white);
        font-size: 3rem;
        font-family: var(--font-heading);
    }

    th {
        background: rgba(212, 175, 55, 0.15);
        color: var(--secondary);
        padding: 20px;
        text-align: left;
        font-size: 1rem;
        letter-spacing: 1px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    td {
        padding: 18px 20px;
        color: var(--text-main);
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        transition: 0.3s;
    }

    tr:hover td {
        background: rgba(212, 175, 55, 0.06);
        color: var(--white);
    }

    tr:last-child td {
        border-bottom: none;
    }

    @media (max-width: 900px) {

        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
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
            echo "<td>{$row['check_in']}</td>";
            echo "<td>{$row['check_out']}</td>";


            echo "</tr>";

        }



        ?>





    </table>
</body>

</html>