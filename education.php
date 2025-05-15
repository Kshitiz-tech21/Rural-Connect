<?php
$server = "localhost";
$username ="root";
$password = "";
$dbname = "schools";

$con = mysqli_connect($server,$username,$password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{echo "Connected successfully";
}



$fullName = $_POST["fullName"];
$Age = $_POST["Age"]; 
$contactNumber = $_POST["contactNumber"];//<!--unique-->
$email = $_POST["email"]; //<!--Unique-->
$Address = $_POST["Address"];
$school = $_POST["school"];
$AddressD = $_POST["AddressD"];
$AddressS = $_POST["AddressS"];
$Complain = $_POST["Complain"];

$sql ="INSERT INTO `school`(`fullName`, `Age`, `contactNumber`, `email`, `Address`, `school`, `AddressD`, `AddressS`, `Complain`) 
VALUES ('$fullName','$Age','$contactNumber','$email','$Address','$school','$AddressD','$AddressS','$Complain')";
$result = mysqli_query($con , $sql);

if($result)
{
    echo " data submitted";

}
else{
    echo "error";
}
header("Location: thankspage.html");
    exit;




?>