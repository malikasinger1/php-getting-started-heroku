<html>
<body>


<?php
//isset($_POST[name]) ? $_POST[name] : '';

////app link:
////https://stark-bayou-99693.herokuapp.com/
////
////myAdmin link:
////http://www.phpmyadmin.co/

$servername = "sql6.freemysqlhosting.net";
$username = "sql6108017";
$password = "qy4WKEwXIR";
$dbname = "sql6108017";
//
//Host: sql6.freemysqlhosting.net
//Database name: sql6108017
//Database user: sql6108017
//Database password: qy4WKEwXIR
//Port number: 3306



// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully  ==>  ";


$sql = "INSERT INTO `classroom`(`name`, `roll`, `gender`) VALUES('$_POST[fname]','$_POST[roll]','$_POST[gender]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully" . "<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT `gr`, `name`, `roll`, `gender` FROM `classroom` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["gr"]. " - Name: " . $row["name"]. " " . $row["roll"]. "<br>";
    }
} else {
    echo "0 results";
}




//close connection
$conn->close();

?>
</body>
</html>


























