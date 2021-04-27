<!DOCTYPE html>
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
  <div class="w3-bar w3-border-bottom" style="width:100%;">


    <a href="homepage.php" class="w3-left" style="width:12.25%;">
      <img src="images/NEWnavbarlogo.png" style="width:100%;"></a>

    <a href="index.php" class="w3-bar-item w3-button w3-border-left w3-right w3-black w3-padding-24">LOG<br>OUT</a>

    <a href="employeeresources.php"
      class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24 w3-pale-red">EMPLOYEE<br>RESOURCES</a>
    <!--Current screen-->

    <a href="transactionhistory.php"
      class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24">TRANSACTION<br>HISTORY</a>

    <a href="inventory.php" class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24">VIEW<br>INVENTORY</a>

    <a href="transaction.php"
      class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24">NEW<br>TRANSACTION</a>

  </div>
  <!--Navigation bar ENDS-->

  <div class="w3-display-middle" style="width:90%;height:70%;">
    <!--Table for item glossary STARTS
   -Item glossary will allow employees to match product ID's and product name's in system with what
    physical items they see in store by using their own description of the product-->
    <table class="fixed_header w3-border w3-striped" style="width:100%;height:92.5%;">
      <!--Striped makes rows alternate colorf or enhanced readability-->

      <!--Table header STARTS-->
      <thead class="w3-black">

        <th>Product ID</th>
        <th>Product Name</th>
        <th class="w3-right-align">Product Description</th>
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
          <td class="w3-right-align">This item is extremeley nice and useful for the cold months. It is an amazing
            addition
            to any wardrobe. We reccomend pairing with a scarf.</td>
        </tr>
        <!--End of properties for ONE row-->

        <tr class="w3-hover-pale-red">
          <td>1002</td>
          <td>Dummy Item Two</td>
          <td class="w3-right-align">Red sweater with green stripes and sequin details. U-neck shape with an extremeley
            flared bottom.</td>
        </tr>

        <tr class="w3-hover-pale-red">
          <td>1003</td>
          <td>Dummy Item Three</td>
          <td class="w3-right-align">Black faux leather belt with large buckle at the front. White detailing around belt
            holes.</td>
        </tr>

      </tbody>

    </table>
    <!--Table for item glossary ENDS-->

    <!--Table for Profit & Loss calculations STARTs-->
    <table class="fixed_header w3-card-4 w3-centered" style="width:100%;height:12%;margin-block-start: 1.2%;">

      <thead>
        <tr class="w3-dark-gray">
          <th>Revenue</th>
          <!--Revenue will sum total of: For every product ID with a sale ID, multiply the total quantity sold by the average retail price for that product-->
          <th>Cost of Goods Sold</th>
          <!--COGS will sum total of: For every product ID with a sale ID, multiply the total quantity sold by the average supplier price for that product-->
          <th>Gross Profit</th>
          <!--Gross Profit will subtract total COGS from total Revenue-->
        </tr>
      </thead>

      <!--'tr' encases properties for new row in table ... HTML requires manual entry of each row value
       -Code TBU to query database and display DB information instead-->
      <tbody class="w3-light-gray">
        <tr class="w3-hover-pale-green w3-centered" style="font-size:x-large;">
          <!--Pale green highlight when row is moused over-->
          <td>$1000</td>
          <td>$300</td>
          <td>$700</td>
        </tr>
      </tbody>

    </table>

    <!--Table for Profit & Loss calculations ENDS-->
  </div>


  <!--Page footer STARTS-->
  <img class="w3-display-bottommiddle" src="images/PageFooter.png" style="width:98%;margin-bottom:0.5%">
  <!--Page footer ENDS-->

</body>

</html>