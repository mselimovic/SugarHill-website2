<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "mehmed.selimovic.ets@gmail.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['textarea'];
    
    //send email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location:success.html');
  }