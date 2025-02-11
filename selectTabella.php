<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table style="border: 1px solid black">
    <?php
        $scelta = $_GET["tabella"];
        $sql = "SELECT * FROM $scelta";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td>" . $key . ": " . $value . "</td>";
                }
                echo "</tr>";
            }
        }
    ?>
    </table>
</body>
</html>