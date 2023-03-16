<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$age = $_POST['age'];
//Database connection
$conn = new mysqli('localhost','root','register');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into registration(firstName, lastname, age, email, password, number)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("ssissi",$firstName, $lastname, $age, $email, $password, $number)
    $stmt->execute();
    echo "Registration Successfull....";
    $stmt->close();
    $conn->close();
}
?>