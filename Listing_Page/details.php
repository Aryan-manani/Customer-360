<?php

    $servername="localhost";
    $dbname="customer360";
    $username="root";
    $pswd="";

    $conn=mysqli_connect($servername,$username,$pswd,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM customer";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row["Customer_ID"] . "</td>
            <td>" . $row["Customer_Name"] . "</td>
            <td>" . $row["Mobile_number"] . "</td>
            <td>" . $row["Policy_number"] . "</td>
            <td> <a href=\"../Details_Page/index.php\" target=_blank><button class=\"btn btn-dark btn-sm value\"> View</button></a></td>
            </tr>";
        }
    } else {
        echo "0 results";
    }
?>