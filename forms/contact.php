<?php
$server = "localhost";
$username ="root";
$password = "";
$dbname = "rocketech";

$conn = mysqli_connect($server , $username , $password , $dbname);




if (isset($_POST['submit']))
{
  if(!empty($_POST["name"]) && !empty($_POST["email"]  ) &&  !empty($_POST["subject"]) && !empty($_POST["message"]) )
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query = "insert into form(name,email,subject,message) values('$name', '$email', '$subject', '$message')";
    $run = mysqli_query($conn,$query);

    if($run){
      header('Location:../index.html?messagesent');
      exit;
      
    }
    else{
      echo" Form not submitted";
    }

  }
  else{
    echo" all fields required";
  }
}

?>