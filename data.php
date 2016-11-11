
<!DOCTYPE html>

<html>
<head>
<title>making a nav bar </title>
<style>
body
{
    margin:0;
}
.nav 
{

  font-family:  "Trebuchet MS", Arial, Helvetica, sans-serif;
    background-color:black;
     padding: 0;
     margin:0;
 overflow: hidden;
 height: auto;
 


}
.nav ul
 {
    margin:0;
	 list-style-type: none;
padding: 0;

  
}
.nav  li
{
   float:left;
}
.nav  a 
{

    display:block;
    color:white;
    padding :20px 20px;
    text-decoration:none;
    text-align:center;
    transition: background-color 0.5s ;

}

.nav  a:hover
{

background-color:red;

}

.side
{
    float:left;
 
    height: 100%;
   position: fixed;
    overflow: auto;
    
}
.side ul
 {

	 list-style-type: none;
padding: 0;
    
      background-color:lightgrey;    
 margin:0;
  
}
.side  a 
{
     
    display:block;
    color:black;
    padding :20px 20px;
    text-decoration:none;
    text-align:center;
    transition: background-color 0.5s ;

}
.side a:hover
{
    background-color:grey;
    
}
.form
{
 
    margin: auto;
    font-family:  "Trebuchet MS", Arial, Helvetica, sans-serif;
  
    background-color:lightgray;
    display:block;
    padding-left:10px;
   float:right;
    overflow:auto;
   box-shadow:5px 5px 5px  gray;
    
}
.form input
{
    margin:10px 10px;
}

</style>

<head>
<body>
<div class="nav">
 <ul>
    <li><a href="http://www.facebook.com"> Facebook </a> </li>
    <li><a href="http://www.facebook.com"> Facebook </a> </li>
    <li><a href="http://www.facebook.com"> Facebook </a> </li>
    <li><a href="http://www.facebook.com"> Facebook </a> </li>
 </ul>

</div >

<div class="form">
<form method="post" action="data.php">
    Username:
    <br>
    <input type="text" name="ourusername" value="">
    <br>
    Password :
    <br>
         <input type="password" name="ourpassword" value="">
    <br>
  <input name="submit" type="submit" value="Log In">
    <br>
</form>
</div>
</body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$myusername="";
$mypassword="";

 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$myusername=$_POST["ourusername"];
$mypassword=$_POST["ourpassword"];
}
$sql="";
if($_SERVER["REQUEST_METHOD"]==="POST")
{
 $sql="INSERT INTO userdata (username,password)
 VALUES ('$myusername','$mypassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location:PHP-1.php');
}
unset($_POST);
$conn->close();

?>




</html>