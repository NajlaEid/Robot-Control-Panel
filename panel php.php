<?php
if (isset($_GET['button'])) {
    $button = $_GET['button'];

}
    $conn = mysqli_connect('localhost', 'username', 'password');
    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_query($conn,"INSERT INTO data_locations(letter) VALUES ('L',R','B','F')");
    $result = mysqli_query($conn, "SELECT * FROM data_locations WHERE letter = '$button'");

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['letter'] . "</td><td>" . "" . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No data found for button " . $button;
    }

    mysqli_close($conn);
  
?>

