<?php
// Array of Indian Cricket player names
$cricketPlayers = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "KL Rahul",
    "Rishabh Pant",
    "Hardik Pandya",
    "Mohammed Shami",
    "Cheteshwar Pujara",
    "Ajinkya Rahane",
    "Ravichandran Ashwin",
    "Mayank Agarwal",
    "Shreyas Iyer"
);

// Start building the HTML table
$htmlTable = "<table border='1'>
                <thead>
                    <tr>
                        <th>Sl.No</th>
                        <th>Player Name</th>
                    </tr>
                </thead>
                <tbody>";

// Loop through the array and add rows to the table
foreach ($cricketPlayers as $index => $playerName) {
    $slNo = $index + 1; // Serial number starting from 1
    $htmlTable .= "<tr>
                        <td>$slNo</td>
                        <td>$playerName</td>
                    </tr>";
}

// Close the table body and table tag
$htmlTable .= "</tbody>
              </table>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
</head>
<body>

    <h2>Indian Cricket Team</h2>

    <?php
    // Display the generated HTML table
    echo $htmlTable;
    ?>

</body>
</html>