<?php
session_start();
//Insert user into user table
//hostname - stoked-energy-210523:us-east1:mcgtechdb1
$conn = new mysqli("35.231.20.242","webguest","M2Ykx19P!rm&", "Site_Users");
if (mysqli_connect_errno())
	echo "Failed to connect to MySQL: " . mysqli_connect_errno();
$sql = "INSERT INTO user_Address(address_line1, address_line2, address_city, address_state) VALUES ('$_POST[address]', '', '$_POST[city]', '$_POST[state]')";
$conn->query($sql);
$result = $conn->query("SELECT max(address_id) as mAdd FROM user_Address");
$row = mysqli_fetch_assoc($result);
$sql = "INSERT INTO user_Site(siteuser_first, siteuser_last, siteuser_dob, fk_address_id, siteuser_username, siteuser_password) VALUES ('$_POST[first]', '$_POST[last]', '$_POST[dob]', " . $row["mAdd"] . ", '$_POST[userName]', MD5('$_POST[password]'))";
if ($conn->query($sql) !== TRUE)
	echo "Error: " . $sql . "<br>" . $conn->error; 
$conn->close();
$_SESSION['user'] = $POST['first'];
header('Location:index.html');
?>