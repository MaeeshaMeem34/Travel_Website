<?php 
if (isset($_POST['name'])){ 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$name= $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `trip`.`student`(`Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `dt`)
 VALUES ('$name','$age','$gender','$email','$phone','$desc', current_timestamp())";
 
 if($conn->query($sql) == true)
{
    echo "successfully inserted!";
}else{
    echo "ERROR: $sql <br> $conn->error";
}

$conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,400;1,700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="back-img" src="bg.jpg" alt="IUT">
    <div class="container">
        <h1> Welcome to IUT Trip Form</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        <p> Thank you for submitting your form.</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any information here"></textarea>
              
            <button class="btn"> Submit</button>
            




        </form>

    </div>
    <script src="index.js"></script>
</body>
</html>