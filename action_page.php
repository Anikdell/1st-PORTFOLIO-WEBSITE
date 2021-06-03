<?php
if(isset($_POST["submit"])){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $pass = $_POST['pass'];


 $conn = new mysqli('19 8.71.225.54','anik','Misty@anik123') or die(mysqli_error());
 //Select DB From database
 $db = mysqli_select_db($conn, 'anik') or die("database error");
 //Selecting Database
 $query = mysqli_query($conn, "SELECT * FROM sign_up WHERE phone='".$phone."'");
 $numrows = mysqli_num_rows($query);
 if($numrows == 0)
 {
 //Insert to Mysqli Query
 $sql = "INSERT INTO sign_up(id,name,email,phone,pass) VALUES('0','$name','$email','$phone','$pass')";
 $result = mysqli_query($conn, $sql);
 //Result Message
 if($result){
 ?>
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registration Successfull..! Please login...!');
    window.location='index.html';
    </script>");
 <?php
 }
 else
 {
 echo "Failure!";
 }
 }
 else
 {
?>
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('That Username or Mobile No., already exists! Please login...!');
    window.location='index.html';
    </script>");
 <?php
 }
 }
 
?>