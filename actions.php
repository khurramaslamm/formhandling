<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php 

if(isset($_POST['submit']) && !empty($_POST['submit'])){
$amount=  htmlspecialchars($_POST['amount']);
$currency= htmlspecialchars($_POST['currency']);
$desc = htmlspecialchars($_POST['description']);
$brand = htmlspecialchars($_POST['brand']);


echo "<h2> Project Succesfully Created </h2>";
echo "<h4>Amount: ". $amount."<br>";
echo "<h4>Currency: ".$currency."<br>";
echo "<h4>Project Description: ".$desc."<br>";
echo "<h4>Brand: ".$brand."<br>";
}

require('connection.php');

$insert = "INSERT INTO project_info(amount,currency,project_desc,brand) VALUES('$amount' ,'$currency','$desc','$brand')";

if($result = mysqli_query($connection, $insert)) {
    $success = "Successful!";
    echo $success;
  } 
  else {
    $failure = "Unable to INSERT into DB: " . mysqli_error($connection);
    echo $failure;
  }

mysqli_close($connection);
?> 

</body>
</html>


 