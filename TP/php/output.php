<?php
    include_once 'includes/dbh.php';
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8"/>
        <title>BloodOnline</title>
        <link rel="stylesheet" href="../css/output.css" type="text/css"/>
    </head>
    <body>
    
    <?php

        $sql = "SELECT * FROM donors;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    ?>

    <div>
        <p>

            <?php
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo $row['username'] . "<br>";
                    }
                }
            ?>
        </p>
    </div>
    </body>
</html>