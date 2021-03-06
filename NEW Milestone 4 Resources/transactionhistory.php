<!DOCTYPE html>

<?php
//db login info
$servername = 'localhost';
$username = 'id16456968_group8';
$password = 'Nr3hPeniS7\^@k2a$';
$dbname = 'id16456968_is424_group8_db';
$conn = new mysqli($servername, $username, $password, $dbname);
//testing db login
if (!$conn) {
	die("failed to connect to db");
}
class Employee {
		private $employeeName;
		private $employeeID;
		private $jobCode;
		
		function setEmployeeName($name) {
			$this->$employeeName = $name;
		}
		function setEmployeeID($id) {
			$this->$employeeID = $id;
		}
		function setJobCode($code) {
			$this->$jobCode = $code;
		}
		function getEmployeeName() {
			return $this->$employeeName;
		}
		function getEmployeeID() { 
			return $this->$employeeID;
		}
		function getJobCode() {
			return $this->$jobCode;
		}
}

?>

<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3-theme-black.css">


<!--CSS for table with FIXED header and SCROLLING body STARTS-->
<style>
  .fixed_header {
    width: 90%;
    table-layout: fixed;
    border-collapse: collapse;
    height:100%
  }

  .fixed_header tbody {
    display: block;
    overflow: auto;
    height:90%;
    
  }

  .fixed_header thead tr {
    display: block;
  }

  .fixed_header thead {
    background: black;
    color: #fff;
  }

  .fixed_header th,
  .fixed_header td {
    padding: 0.5%;
    text-align: left;
    width:9%;
  }

</style>
<!--CSS for table ENDS-->

<body>

  <!--Navigation bar STARTS
   -Button for current screen gets higlighted pale red
   -Clicking logo at left returns user to initial navigation Homepage screen-->
   <div class="w3-bar w3-border-bottom" style="width:100%">

    <a href="homepage.html" class="w3-left" style="width:12.25%;">
    <img src="images/NEWnavbarlogo.png" style="width:100%;"></a>

    <a href="index.html" class="w3-bar-item w3-button w3-border-left w3-right w3-black w3-padding-24">LOG<br>OUT</a>

    <a href="employeeresources.html" class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24">EMPLOYEE<br>RESOURCES</a>

    <a href="transactionhistory.html" class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24 w3-pale-red">TRANSACTION<br>HISTORY</a><!--Current screen-->

    <a href="inventory.html" class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24 ">VIEW<br>INVENTORY</a>

    <a href="transaction.html" class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24">NEW<br>TRANSACTION</a>

  </div>
  <!--Navigation bar ENDS-->

  <!--Display transaction history table STARTS-->
  <div class="w3-display-middle" style="width:90%;height:70%;">

    <!--Container for sorting/filter dropdowns STARTS-->
    <div class="w3-display-container w3-black w3-border" style="width:100%;height:13%;">
      
      <!--Transaction display dropdown-->
      <div class="w3-half" style="margin-block-start:1.75%;">
        <label class="w3-text" style="margin-left:15%;font-size:larmediumge;"><b>Choose transaction type:</b></label>

        <select class="w3-select w3-border-black w3-dark-grey" name="option" style="width:25%;margin-left:1.5%;">
          <option value="" disabled selected></option>
          <option value="1">All transactions</option>
          <option value="2">Purchases</option>
          <option value="3">Sales</option>
        </select>

      </div>

  
      <!--Sorting date dropdown-->
      <div class="w3-half" style="margin-block-start: 1.75%;">

        <label class="w3-text" style="margin-left:40%;font-size:medium;"><b>Sort by:</b></label>

        <select class="w3-select w3-border-black w3-dark-grey" name="option" style="width:25%;margin-left:1.5%;">
          <option value="" disabled selected></option>
          <option value="1">New</option>
          <option value="2">Old</option>
        </select>

      </div>

    </div>
    <!--Container for sorting-filter dropdowns ENDS-->
    
    <table class="fixed_header w3-border w3-striped" style="width:100%;height:95%;"><!--Striped makes rows alternate colors for enhanced readability-->
    <!--Table header STARTS-->
    <thead style="width:100%;">

    <tr style="font-size: small;">
      <th>Transaction Date</th>
      <th>Transaction ID</th>
      <th>Purchase/Sale ID</th>
      <th>Product ID</th>
      <th>Product Name</th>
      <th class="w3-right-align">Quantity Purchased/Sold</th><!--Aligns header cell ONLY ... does not affect cells in table column-->
      <th class="w3-right-align">Transaction Price</th>
      <th class="w3-right-align">Transaction Value</th>
    </tr>
    </thead>
    <!--Table header ENDS-->

    <tbody style="width:100%;">
    <!--'tr' encases properties for new row in table ... HTML requires manual entry of each row value
     -Code TBU to query database and display DB information instead-->
    <tr class="w3-hover-pale-red"><!--Pale red highlight when row is moused over-->
      <td>01/21/2021</td>
      <td>123</td>
      <td>1445228</td>
      <td>1001</td>
      <td>Dummy Item One</td>
      <td class="w3-right-align">3</td>
      <td class="w3-right-align">$5.87</td>
      <td class="w3-right-align">$17.61</td>
    </tr>
    <!--End of properties for ONE row-->

    <tr class="w3-hover-pale-red">
      <td>09/02/2020</td>
      <td>487</td>
      <td>2875298</td>
      <td>1002</td>
      <td>Dummy Item Tw0</td>
      <td class="w3-right-align">1</td>
      <td class="w3-right-align">$100.02</td>
      <td class="w3-right-align">$100.02</td>
    </tr>

    <tr class="w3-hover-pale-red">
      <td>07/18/2020</td>
      <td>987</td>
      <td>1325861</td>
      <td>1003</td>
      <td>Dummy Item Three</td>
      <td class="w3-right-align">8</td>
      <td class="w3-right-align">$3.80</td>
      <td class="w3-right-align">$30.40</td>
    </tr>
    </tbody>
  </table>
  </div>
  <!--Display transaction history table ENDS-->


  <!--Page footer STARTS-->
  <img class="w3-display-bottommiddle" src="images/PageFooter.png" style="width:98%;margin-bottom:0.5%">
  <!--Page footer ENDS-->

</body>

</html>