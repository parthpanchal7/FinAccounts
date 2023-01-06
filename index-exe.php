<?php
$to = 'parthpanchal4245@protonmail.com, info@finguruindia.com, info@finaccountants.com';
$subject = 'New Inquiry From FinAccounting Website';
$fname = $_POST['username'];
$countryCode = $_POST['countryCode'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];
$msg = "<!DOCTYPE html>
    <html>
    <head>
    <style>
    table{
        text-align:center;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
        text-align: left;
    }
    th:nth-child{
        text-transform:uppercase;
        font-weight:bold;
        font-size:16px;
    }
    
    </style>
    </head>
    <body>
    <h3>Hey Admin, You Have New Inquiry From Website. Details are as follow.</h3>
 <table id='t01'>
     
     
    <tr style='background-color:#ddd;'>
    <th>Name</th>
    <td>$fname</td>
    </tr>
    <tr style='background-color:#fff;'>
    <th>Email</th>
    <td>$email</td>
    </tr>
    <tr style='background-color:#ddd;'>
    <th>Mobile Number</th>
    <td>$countryCode $phone</td>
    </tr>
    <tr style='background-color:#ddd;'>
    <th>Message</th>
    <td>$message</td>
    </tr>
</table>

    </body>
    </html>";
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: hello\r\n"; // remetente
$headers .= "Return-Path: $name\r\n"; // return-path

if (mail($to, $subject, $msg, $headers)) {
    
  echo "<script>alert('Thank You. We will Get Back to you ASAP.');window.location='http://parth.epizy.com/fin-acc/v-2'</script>";
        exit;
  
}
else{
  echo "<script> alert('Something Went Wrong. Please Try Again');
        window.location='http://parth.epizy.com/fin-acc/v-2'</script>";
}
?>