<?php
     	$con = mysqli_connect("localhost", "mhealth", "mhealth", "mhealthplay");

        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySql: " . mysqli_connect_error();
        } else {
                echo "Running query\n";
                $query = "SELECT * FROM nursing_home_survey";
                $results = mysqli_query($con, $query) or die(mysql_error());

                $rows    = array();
                while ($r = mysqli_fetch_assoc($results)) {
                        $rows[]	= $r;
                }

                foreach ($rows as $row)
                {
                        foreach ($row as $element)
                        {
                                echo $element . " ";
                        }
                        echo "<br>";
                }
        }
?>
