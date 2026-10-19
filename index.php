<?php
//if (isset($_POST['calculate'])) {

//    $firstcharge = $_POST['first'] * 0.218;

//    echo "The first charge is " . $firstcharge;

//}

include "process.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>
<body>
    <h1 style="text-align: center;">Calculate House Electricity Bill</h1> 
    <!-- inline style -->
     <div>
     <table border = "2">
        <tr>
            <th>Block Tariff (per month)</th>
            <th>Unit</th>
            <th>Rate</th>
        </tr>
        <tr>
            <td>For the first 200 kWh (1 - 200 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.218</td>
        </tr>
        <tr>
            <td>For the next 100 kWh (201 - 300 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.344</td>
        </tr>
        <tr>
            <td>For the next 300 kWh (301 - 600 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.516</td>
        </tr>
         <tr>
            <td>For the next 300 kWh (601 - 900 kWh) per month</td>
            <td>sen/kWh</td>
            <td>0.546</td>
        </tr>
        <tr>
            <td>For the next kWh (901 kWh onwards) per month</td>
            <td>sen/kWh</td>
            <td>0.571</td>
        </tr>
        <tr>
            <td colspan = "3">The minimum monthly chafe is RM300</td>
        </tr>
     </table>
     
     </div>

    <?php
      if ($error != "")
        echo "<h4 style='color: red';> <b>Warning: </b>" . $error . "</h4>";
    ?>

     <div>
     <form method="post">
        <br>
        <label for="first">Enter your first 200 kWh (1 - 200 kWh) per month :</label>
        <input type="number" id="first" name="first" >
        <br>

        <br>
        <label for="second">Enter next 100 kWh (201 – 300 kWh) per month :</label>
        <input type="number" id="second" name="second" >
        <br>

        <br>
        <label for="third">Enter next 300 kWh (301 – 600 kWh) per month :</label>
        <input type="number" id="third" name="third" >
        <br>

        <br>
        <label for="fourth">Enter next 300 kWh (601 - 900 kWh) per month :</label>
        <input type="number" id="fourth" name="fourth" >
        <br>

        <br>
        <label for="fifth">Enter next kWh (901 kWh onwards) per month :</label>
        <input type="number" id="fifth" name="fifth" >
        <br>

        <br>
        <button type="submit" name="calculate">Calculate Bill</button>
        <button type="reset">Reset</button>
     </form>

     </div>
</body>

<?php
if ($showBill){
  echo "<hr>";
  echo "<h3> My Electricity Bill </h3>";

  echo "First input: " . $firstinput . "*0.218 = RM" . $firstcharge . "<br>";
  echo "Second input: " . $secondinput . "*0.344 = RM" . $secondcharge . "<br>";
  echo "Third input: " . $thirdinput . "*0.516 = RM" . $thirdcharge . "<br>";
  echo "Fourth input: " . $fourthinput . "*0.546 = RM" . $fourthcharge . "<br>";
  echo "Fifth input: " . $fifthinput . "*0.571 = RM" . $fifthcharge . "<br>";

  echo "Total consumption: " . $totalInput . "kWh<br>";
  //echo "Total bill: ";
  echo "Total need to paid: RM" . $totalCharge . "<br>";
}
?>

</html>