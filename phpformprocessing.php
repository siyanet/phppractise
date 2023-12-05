<?php
        $server_name = "localhost";
$un = "root";
$password = "";
$db_name = "registration";
$conn = new mysqli($server_name,$un,$password,$db_name);
if ($conn->connect_error){
    die "error ". $conn->connect_error;
}
else{
    echo "connected sucessfully";
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $id = $_POST["id"];
    $sql = "insert into student(id,name) values('$id','$name')";
    if($conn->query($sql)){
        echo "data enterd correctly";
    }
    else{
        echo "error". $conn->connect_error;
    }

}
$conn->close();

        ?>