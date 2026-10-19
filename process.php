<?php
$error = "";
$showBill = false;

if (isset($_POST['calculate'])) {
    $firstinput = $_POST['first'];
    $secondinput = $_POST['second'];
    $thirdinput = $_POST['third'];
    $fourthinput = $_POST['fourth'];
    $fifthinput = $_POST['fifth'];

     //first validation
     //user tak enter value, dia jadi kosong
    if ($firstinput == "")
        $firstinput = 0;
    if ($secondinput == "")
        $secondinput = 0;
     if ($thirdinput == "")
        $thirdinput = 0;
     if ($fourthinput == "")
        $fourthinput = 0;
     if ($fifthinput == "")
        $fifthinput = 0;

     //second validation
     if($firstinput < 0 || $secondinput < 0 || $thirdinput < 0 || $fourthinput < 0 || $fifthinput < 0)
        $error = "Please enter positive number only";

     //third validation
     else if ($firstinput > 200)
        $error = "Please enter below 200kWh";
    else if ($secondinput > 100)
        $error = "Please enter below 100kWh";
    else if ($thirdinput > 300)
        $error = "Please enter below 300kWh";
    else if ($fourthinput > 300)
        $error = "Please enter below 300kWh";

     //fourth validation
    else if ($firstinput + $secondinput + $thirdinput + $fourthinput + $fifthinput == 0)
        $error = "Pleasee enter at least one value";

    else{
        $firstcharge = $firstinput * 0.218;
        $secondcharge = $secondinput * 0.344;
        $thirdcharge = $thirdinput * 0.516;
        $fourthcharge = $fourthinput * 0.546;
        $fifthcharge = $fifthinput * 0.571;

        $totalInput = $firstinput + $secondinput + $thirdinput + $fourthinput + $fifthinput;
        $totalCharge = $firstcharge + $secondcharge + $thirdcharge  + $fourthcharge  + $fifthcharge;

        if($totalCharge < 3)
            $totalCharge = 3;

        if($totalInput > 600){
           // $sst = $totalCharge * 0.06;
            //$totalCharge = $totalCharge + $sst;

            $totalCharge = $totalCharge * 1.06;
        }

         $showBill = true;
    }
}
?>