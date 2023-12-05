<?php
$server_name = "localhost";
$un = "root";
$password = "";
$db_name = "registration";
$conn = new mysqli($server_name,$un,$password,$db_name);
if ($conn->connect_error){
    die("error ". $conn->connect_error);}
else{
    echo "database connected succesfully";
}
$sql = "select * from student";
$result = $conn ->query($sql);
if ($result){
    $row = $result ->fetch_assoc();
    echo "id " .  " name ";
    echo "\n";
    echo $row["id"] . " " . $row["name"];
}
$conn->close();

?>