<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3-theme-black.css">

<style>
  .footerdown {
    position: absolute;
    bottom: 0;
    margin-bottom: 3%;
  }

  .formposition {
    position: relative;

  }
</style>

<body>

  <!--Navigation bar STARTS
    -Button for current screen gets higlighted pale red
    -Clicking logo at left returns user to initial navigation Homepage screen-->
  <div class="w3-bar w3-border-bottom" style="width:100%">

    <a href="homepage.php" class="w3-left" style="width:12.25%;">
      <img src="images/NEWnavbarlogo.png" style="width:100%;"></a>

    <a href="index.php" class="w3-bar-item w3-button w3-border-left w3-right w3-black w3-padding-24">LOG<br>OUT</a>

    <a href="employeeresources.php"
      class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24">EMPLOYEE<br>RESOURCES</a>

    <a href="transactionhistory.php"
      class="w3-bar-item w3-border-left w3-button w3-right w3-padding-24">TRANSACTION<br>HISTORY</a>

    <a href="inventory.php" class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24 ">VIEW<br>INVENTORY</a>

    <a href="transaction.php"
      class="w3-bar-item w3-button w3-border-left w3-right w3-padding-24 w3-pale-red">NEW<br>TRANSACTION</a>
    <!--Current screen-->

  </div>
  <!--Current screen-->

  </div>
  <!--Navigation bar ENDS-->

  <!--Container for transaction information forms STARTS-->
  <div class="w3-display-middle" style="width:90%;height:80%;margin-top:2.5%;margin-bottom:0.25%">

    <!--Enter Purchasing Information form STARTS-->
    <div class="w3-half w3-card-4 w3-light-grey w3-border" style="width:48%;height:95%;margin-right:2%">

      <div class="w3-container w3-center">
        <h2>Enter Purchasing Information</h2>
      </div>


      <form class="w3-container formposition" style="width:100%;height:90%" action="/action_page.php">
        <!--Action denotes URL or file to send form information to-->

        <p style="height:10%;">
          <label class="w3-text"><b>Enter item name:</b></label>
          <input class="w3-input w3-border" name="first" type="text" placeholder="Ex: Moncler Suyen Hooded Down Parka">
        </p>

        <p style="height:10%;">
          <label class="w3-text-black"><b>Enter supplier name:</b></label>
          <input class="w3-input w3-border" name="last" type="text" placeholder="Ex: Lena's Textiles">
        </p>

        <p style="height:10%;">
          <label class="w3-text-black"><b>Enter supplier price ($usd):</b></label>
          <input class="w3-input w3-border" name="last" type="number" step="0.01" min="0.01" placeholder="Ex: 6.50">
          <!--Step allows for cents instead of requiring full dollar values-->
        </p>

        <p style="height:10%;">
          <label class="w3-text-black"><b>Enter quantity purchased:</b> </label>
          <input class="w3-input w3-border" name="last" type="number" placeholder="Ex: 123">
        </p>

        <p style="height:10%;">
          <label class="w3-text-black"><b>Enter item description/comments:</b></label>
          <textarea class="w3-input w3-border" style="width:100%;max-width:100%;" name="last" type="text"
            placeholder="(Provide more in-depth description of item's appearance or features, if necessary" wrap="soft">
          </textarea>
          <!--Max height and width style requirements prevent user from resizing text box to be to large
                          -Soft wrap allows user to see all text entered in box without adding spaces to database entry-->
        </p>


        <!--Clear and Log Purchase buttons STARTS-->
        <footer class="footerdown" style="width:95%;">
          <!--Clears information typed and resets form-->
          <button class="w3-left w3-btn w3-dark-grey w3-xlarge" type="reset">Clear</button>

          <!--Sends information to file listed in 'action' at form start-->
          <button class="w3-right w3-btn w3-dark-grey w3-xlarge" type="submit" id="logTransaction"
            name="logTransaction">Log Purchase</button>
        </footer>
        <!--Clear and Log Purchase buttons ENDS-->

      </form>

    </div>
    <!--Enter Purchasing Information form ENDS-->

    <!--Enter Sales Information form STARTS-->
    <div class="w3-half w3-card-4 w3-white w3-border" style="width:48%;height:95%;margin-left:2%;">

      <div class="w3-container w3-center">
        <h2>Enter Sales Information</h2>
      </div>

      <form class="w3-container formposition" style="width:100%;height:90%" action="/action_page.php">
        <!--Action denotes URL or file to send form information to-->

        <p style="height:10%;">
          <label class="w3-text"><b>Select item name:</b></label><br>
          <select class="w3-select w3-border" name="option" style="width:100%">
            <!--Provides dropdown box for all item names currently in inventory for user to select when logging a sale
               -Prevents a mistype from updating the incorrect product in database (if a text input box were used instead)-->
            <option value="" disabled selected></option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </p>

        <p style="height:10%">
          <label class="w3-text"><b>Tie to previous transaction? (check for 'yes'):</b></label><br>
          <!--Check box to assign same transaction ID and sale ID as previous transaction entered
             -Avouds creation of multiple 'transactions' being recorded for multiple products purchased by one customer-->
          <input class="w3-check" type="checkbox">

        </p>

        <p style="height:10%;">
          <label class="w3-text-black"><b>Enter retail price ($usd):</b></label>
          <input class="w3-input w3-border" name="last" type="number" step="0.01" min="0.01" placeholder="Ex: 14.99">
          <!--Step allows for cents instead of requiring full dollar values-->
        </p>

        <p style="height:10%;">
          <label class="w3-text-black"><b>Enter quantity sold:</b> </label>
          <input class="w3-input w3-border" name="last" type="number" placeholder="Ex: 123">
        </p>

        <!--Clear and Log Sale buttons STARTS-->
        <footer class="footerdown" style="width:95%;">

          <!--Clears information typed and resets form-->
          <button class="w3-left w3-btn w3-dark-grey w3-xlarge" type="reset">Clear</button>

          <!--Sends information to file listed in 'action' at form start-->
          <button class="w3-right w3-btn w3-dark-grey w3-xlarge" type="submit" id="logTransaction"
            name="logTransaction">Log Sale</button>

        </footer>
        <!--Clear and Log Sale buttons ENDS-->

      </form>
    </div>
    <!--Enter Sales Information form ENDS-->

  </div>
  <!--Container for transaction information forms ENDS-->

  <!--Page footer STARTS-->
  <img class="w3-display-bottommiddle" src="images/PageFooter.png" style="width:98%;margin-bottom:0.5%">
  <!--Page footer ENDS-->

</body>

</html>