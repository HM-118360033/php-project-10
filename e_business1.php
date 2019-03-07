<!DOCTYPE html>
<html>
    <head>
        <style>
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
} 

        </style>
    </head>
    <title>e_business1</title>
    <body>
        <!--//starting the session to get the session variable from the last page-->
       

<?php

session_start();
$totalValue = $_POST['txtTotal'];

echo "The final value is :".$totalValue.".";
?>
    <center>
        <form action="consulting_services.html">
             <input type="submit" value="Finish" />
            </form>
    </center>
    </body>
  </html>