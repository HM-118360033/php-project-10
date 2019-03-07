<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $TotalValue;
?>
<!DOCTYPE html>
<html lang='en' xmins='https//www.w3.org/1999/xhtml'>
    <head>
        <meta charset='utf-8'/>
        <title>EBusiness 3</title>
        <link rel ="stylesheet" href="style.css" type="text/css"/>
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
input[type=button] {
  width: 100%;
  background-color: #E7D634;
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
        `<div class="form">
            <form name="intCalc" method="post" action="e_business1.php">
                <h1>Shop Calculator</h1>
                <hr />
                <center>
                    <table  cellspacing="10">
                        <tr>
                            <td><b>Select a Consulting Service</b></td>
                        
                        </tr>
                        <tr>
                            <td>Blockchain</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000"/></td>
                            
                        </tr>
                        <tr>
                            <td>Autonomous Things</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000"/></td>
                            
                        </tr>
                        <tr>
                            <td>Immersive Technology</td>
                            <td><input type="radio" id="ImmersiveTechnology" name="rdoGroup" value="3000"/></td>
                            
                        </tr>
                    </table>
                </center>
                <br />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Amount</b></td>
                        </tr>
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTotal" name="txtSub" readonly /></td>
                        </tr>
                        <tr>
                            <td>- Discount @10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" Value="" readonly /></td>
                        </tr>
                    </table>
                </center>
                
                <br />
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcsub()" value="Calculate">
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear">
                    <input type="Submit" name="btnProceed" id="btnProceed" onclick="" value="proceed">
                </center>
            </form>
            </div>
                
                <script type = "text/javascript">
                 function calcsub() {
                     //assignig variables to the values
                     var subAmount = parseFloat(document.getElementById('txtSubTotal').Value);
                     var Blockchain = parseFloat(document.getElementById('Blockchain').Value);
                     var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').Value);
                     var ImmersiveTechnology = parseFloat(document.getElementById('ImmersiveTechnology').Value);
        
                    //if ratio buttons are clicked values are assigned
                    if(document.GetElementById('Blockchain').checked){
                        document.intCalc.txtSubTot.Value=Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                        
                    }
                    else if(document.GetElementById('AutonomousThings').checked){
                        document.intCalc.txtSubTot.Value=AutonomousThings;
                        subAmount = AutonomousThings ;
                        calculation(subAmount);
                    }
                    else if(document.GetElementById('ImmersiveTechnology').checked){
                        document.intCalc.txtSubTot.Value=ImmersiveTechnology;
                        subAmount = ImmersiveTechnology;
                        calculation(subAmount);
                    }  
                //function for calculating the values
                function calculation(parm$Total){
                    var subTotal = parseFloat(parmSTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc =parseFloat(subTotal * .40);
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //insertingthem into corect fields
                    documentintCalc.txtDisc.value = discCalc;
                    documentintCalc.txtVat.value = vatCalc;
                    documentintCalc.txTotal.value =total;
                }
                
                function AmountClear(){
                    document.getElementById("txtSubTot").Value="";
                    document.getElementById("txtDisc").Value="";
                    document.getElementById("txtVat").Value="";
                    document.getElementById("txtTotal").Value="";
                }
                 }
                </script>
                
    </body>
</html>
      


