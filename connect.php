<?php

//  mysqli object oriented 
//  mysqli procedural
//  pdo

$servername = "localhost";
$username = '';
$password = '';

// create connection 
// $conn = new mysqli($servername, $username, $password);

//check connection 
// if($conn->connect_error){
//     die("Connection failed: ". $conn->connect_error);
// }else{
//     echo "connected Successfully";
// }


// Or Use Tis fomart 

$conn = mysqli_connect($servername, $username, $password);

// check for connection 

if(!$conn){
    die("connection failed" . mysqli_connect_error());
}else{
    echo "sucess";
}


$sql = "SELECT id, firstname, lastname FROM JOSHTBL";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // prints each data in a row 
    while($row = mysqli_fetch_assoc($result)){
        echo "id: ". $row["id"]. "Name:".$row["firstname"]. "".$row["lastname"]."<br>";
    }
}else{
    echo "0 results";
}


?>