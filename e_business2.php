<?php
session_start();
$fullNameValue = "";
$totalValue = "";
/*
 * create a session variable for the mobile number
 */
$totalValue = $_post['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;

/*
 * allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Information</title>
        <style>
            
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
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


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

        </style>
    </head>
    <body>
        <div class ="form">
            <form Name="details" method="post" action="e_business3.php">
                <center>
                    <table  cellspacing="10">
                        <tr>
       
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                        <tr>
                            <td>phone Number</td>
                            <td><input type ="text" id="txtNumber" name ="txtNumber" value="" required/></td>
                        </tr>
                        
                        <tr>
                            <td>PIN</td>
                            <td><input type ="password" id="txtPassword" name="txtPassword" value="" maxlength="4" minlength="4" required/></td>
                            
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value ="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
               
                </div>    
           
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onClick="" value="Continue" />
                </center>
        
        </body>
</html>
            
                        