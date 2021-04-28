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
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    height: 100%
  }

  .fixed_header tbody {
    display: block;
    overflow: auto;
    height: 100%;

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
    width: 3%;
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

    <a href="employeeresources.html"
      class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24">EMPLOYEE<br>RESOURCES</a>

    <a href="transactionhistory.html"
      class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24">TRANSACTION<br>HISTORY</a>

    <a href="inventory.html"
      class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24 w3-pale-red">VIEW<br>INVENTORY</a>
    <!--Current screen-->

    <a href="transaction.html"
      class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24">NEW<br>TRANSACTION</a>

  </div>
  <!--Navigation bar ENDS-->

  <!--Display current inventory table STARTS-->
  <div class="w3-display-middle" style="width:90%;height:76.5%;margin-top:1.5%">

    <table class="fixed_header w3-striped w3-border">
      <!--Striped class makes row alternate colors for enhanced readability-->

      <!--Table header STARTS-->
      <thead class="w3-black">
        <tr>
          <th>Product ID</th>
          <th>Product Name</th>
          <th class="w3-right-align">Quantity In Stock</th>
        </tr>
        <!--Aligns header cell ONLY ... does not affect cells in table column-->
      </thead>
      <!--Table header ENDS-->
      <tbody>
        <!--'tr' encases properties for new row in table ... HTML requires manual entry of each row value
      -Code TBU to query database and display DB information instead-->
        <tr class="w3-hover-pale-red">
          <!--Pale red highlight when row is moused over-->
          <td>1001</td>
          <td>Dummy Item One</td>
          <td class="w3-right-align">67</td>
        </tr>
        <!--end of properties for ONE row-->

        <tr class="w3-hover-pale-red">
          <td>1002</td>
          <td>Dummy Item Two</td>
          <td class="w3-right-align">19</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1003</td>
          <td>Dummy Item Three</td>
          <td class="w3-right-align">32</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1004</td>
          <td>Dummy Item Four</td>
          <td class="w3-right-align">86</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1005</td>
          <td>Dummy Item Five</td>
          <td class="w3-right-align">35</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1006</td>
          <td>Dummy Item Six</td>
          <td class="w3-right-align">2</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>10047</td>
          <td>Dummy Item Seven</td>
          <td class="w3-right-align">11</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1008</td>
          <td>Dummy Item Eight</td>
          <td class="w3-right-align">42</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1009</td>
          <td>Dummy Item Nine</td>
          <td class="w3-right-align">36</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1010</td>
          <td>Dummy Item Ten</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1011</td>
          <td>Dummy Item Eleven</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1012</td>
          <td>Dummy Item Twelve</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1013</td>
          <td>Dummy Item Thirteen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1014</td>
          <td>Dummy Item Fourteen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1015</td>
          <td>Dummy Item Fifteen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1016</td>
          <td>Dummy Item Sixteen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1017</td>
          <td>Dummy Item Seventeen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1018</td>
          <td>Dummy Item Eighteen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1019</td>
          <td>Dummy Item Nineteen</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1020</td>
          <td>Dummy Item Twenty</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1021</td>
          <td>Dummy Item Twenty One</td>
          <td class="w3-right-align">8</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1022</td>
          <td>Dummy Item Twenty Two</td>
          <td class="w3-right-align">3</td>
        </tr>

      </tbody>

    </table>
  </div>
  <!--Display current inventory table ENDS-->

  <!--Page footer STARDS-->
  <img class="w3-display-bottommiddle" src="images/PageFooter.png" style="width:98%;margin-bottom:0.5%">
  <!--Page footer ENDS-->

</body>

</html>