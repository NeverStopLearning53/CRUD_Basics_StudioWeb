<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        
        <title>View Records</title>
        
    </head>
    <body>
        <h1>View Records</h1>

    <?php

        include('connect-db.php');

        if ($result = $mysqli->query("SELECT * FROM players ORDER BY id"))
        {
            if($result->num_rows > 0  ){
                echo "<table border='1' cellpadding='10'>";
                echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>";

                while ($row = $result->fetch_object())
                {
                    echo "<tr>";
                    echo "<td>" . $row->id . "</td>";
                    echo "<td>" . $row->firstname . "</td>";
                    echo "<td>" . $row->lastname . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
            else 
            {
                echo "No results to display!";
            }
        }
        else 
        {
            echo "Error: " . $mysqli->error;

        }

        mysqli_report(MYSQLI_REPORT_ERROR);

        $mysqli->close();


        ?>

        
    </body>
</html>