<?php
$server = "localhost";
$username ="root";
$password = "";
$dbname = "dynor";

$con = mysqli_connect($server,$username,$password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{echo "Connected successfully";
}


//start
$fullName = $_POST["fullName"];
$age = $_POST["age"];
$contactNumber = $_POST["contactNumber"];
$email = $_POST["email"];

$sql = "INSERT INTO `filesave`(`fullName`, `age`, `contactNumber`, `email`) VALUES
 ('$fullName','$age','$contactNumber','$email')";

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