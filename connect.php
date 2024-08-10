<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images/logo5.png" type="image/x-icon">

    <title>Promosale.bg</title>
	 <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .content {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
}
$con = mysqli_connect('localhost','root','','db12z');
if ($con) {
  echo "Connect to database successfully!";
  $sql = "insert into `promosale`(name, email, mobile, message)
          values('$name','$email','$mobile','$message')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "Data inserted successfully!";
  } else {
    die(mysqli_error($con));
  }
} else {
  die(mysqli_error($con));
}
?>

<br>
<img src="images/4.png" style="width:100%;">

<script>
// Изчакване на 5 секунди преди прехвърляне
setTimeout(function() {
    // Прехвърляне към началната страница
    window.location.href = 'index.html';
}, 10000);
</script>

</body>
</html>

