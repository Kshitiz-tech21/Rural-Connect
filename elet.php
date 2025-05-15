<?php
$server = "localhost";
$username ="root";
$password = "";
$dbname = "rural";

$con = mysqli_connect($server,$username,$password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else{echo "Connected successfully";
}


//start
$issue = $_POST["issue"];


$sql = "INSERT INTO `elect`(`issue`) VALUES ('$issue')";

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