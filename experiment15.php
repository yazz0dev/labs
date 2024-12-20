<html>
<head>
    <title>Cricket</title>
    <style>
        table {
            width: 40%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Indian Cricket Players</h1>

    <?php

    // Array of Indian Cricket players
    $indianPlayers = array(
        "Virat Kohli",
        "Rohit Sharma",
        "Jasprit Bumrah",
        "Ravindra Jadeja",
        "Hardik Pandya",
        "Shubman Gill",
        "Mohammed Shami",
        "Ravichandran Ashwin",
        "KL Rahul",
        "Suryakumar Yadav"
    );
    $playerEarnings = array(
        "Virat Kohli" => "23904",
        "Rohit Sharma" => "20000", 
        "Jasprit Bumrah" => "15000",
        "Ravindra Jadeja" => "12000",
        "Hardik Pandya" => "10000",
        "Shubman Gill" => "8000",
        "Mohammed Shami" => "7000",
        "Ravichandran Ashwin" => "6000",
        "KL Rahul" => "9000",
        "Suryakumar Yadav" => "11000"
    );

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Player Name</th>";
        echo "<th>Earnings(Yearly)</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Loop through the array and display each player in a table row
        foreach ($indianPlayers as $player) {
            echo "<tr>";
            echo "<td>" . $player . "</td>";
            echo "<td>$" . $playerEarnings[$player] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    ?>

</body>
</html>