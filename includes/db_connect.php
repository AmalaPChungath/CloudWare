<?php
// db_connect.php
function getDBConnection() {
    $host = "cloudware.mysql.database.azure.com";
    $username = "amala";
    $password = "Mace@123";
    $database = "cloudware";
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}

// Create a global connection object
$conn = getDBConnection();
?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "warehouse";

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
?>

