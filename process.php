<!DOCTYPE html>
<html>
<head>
  <title>KSEB Bill</title>
  <style>
    body {
      font-family: monospace;
    }
    .bill {
      width: 400px;
      border: 1px solid black;
      padding: 10px;
      margin: 20px auto;
    }
    .header {
      text-align: center;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .label {
      width: 150px;
      display: inline-block;
    }
    .value {
      display: inline-block;
    }
    .barcode {
      text-align: center;
      margin-top: 10px;
    }
    .barcode img {
      width: 200px; 
    }
    .footer {
        text-align: center;
        margin-top: 10px;
        font-size: small;
    }
  </style>
</head>
<body>

<?php
// Default values (you can get these from a form submission)
$billNumber = isset($_POST['billNumber']) ? $_POST['billNumber'] : "6701170904651";
$name = isset($_POST['name']) ? $_POST['name'] : "VIJAYAN V K";
$consumerId = isset($_POST['consumerId']) ? $_POST['consumerId'] : "1167013030917";
$address = isset($_POST['address']) ? $_POST['address'] : "VENGAYIL POODAMKALL";
$billDate = isset($_POST['billDate']) ? $_POST['billDate'] : "07/09/2017";
$dueDate = isset($_POST['dueDate']) ? $_POST['dueDate'] : "20/09/2017";
$currentReading = isset($_POST['currentReading']) ? $_POST['currentReading'] : 4153;
$previousReading = isset($_POST['previousReading']) ? $_POST['previousReading'] : 3790;
$fixedCharges = isset($_POST['fixedCharges']) ? $_POST['fixedCharges'] : 60.00;
$meterRent = isset($_POST['meterRent']) ? $_POST['meterRent'] : 12.00;
$govtSubsidies = isset($_POST['govtSubsidies']) ? $_POST['govtSubsidies'] : -118.75;
$energyChargesRate = isset($_POST['energyChargesRate']) ? $_POST['energyChargesRate'] : 1.50; // Assuming a rate per unit
$section = isset($_POST['section']) ? $_POST['section'] : "Mavungal Electrical Section";
$sectionCode = isset($_POST['sectionCode']) ? $_POST['sectionCode'] : "0467-2203149";
$customerCare = isset($_POST['customerCare']) ? $_POST['customerCare'] : "1912";
$pole = isset($_POST['pole']) ? $_POST['pole'] : "T69_BCT N 11 / N8";
$transformer = isset($_POST['transformer']) ? $_POST['transformer'] : "BESCOAT";
$billArea = isset($_POST['billArea']) ? $_POST['billArea'] : "A05/4/164";
$disconnDate = isset($_POST['disconnDate']) ? $_POST['disconnDate'] : "16/10/2017";
$tariff = isset($_POST['tariff']) ? $_POST['tariff'] : "LT-1A Dom";
$purpose = isset($_POST['purpose']) ? $_POST['purpose'] : "Domestic";
$deposit = isset($_POST['deposit']) ? $_POST['deposit'] : "2000";
$meterStatus = isset($_POST['meterStatus']) ? $_POST['meterStatus'] : "OK";
$load = isset($_POST['load']) ? $_POST['load'] : "4 KW";
$demand = isset($_POST['demand']) ? $_POST['demand'] : "3.615 KVA";
$phase = isset($_POST['phase']) ? $_POST['phase'] : "1";
$prvRdDate = isset($_POST['prvRdDate']) ? $_POST['prvRdDate'] : "07/07/2017";
$curRdDate = isset($_POST['curRdDate']) ? $_POST['curRdDate'] : "07/09/2017";
$rdOMF = isset($_POST['rdOMF']) ? $_POST['rdOMF'] : "1";
$readerName = isset($_POST['readerName']) ? $_POST['readerName'] : "ARUN.P";

// Calculations
$unitsConsumed = $currentReading - $previousReading;
$avgConsumption = $unitsConsumed; // You might need a more complex calculation for average
$energyCharges = $unitsConsumed * $energyChargesRate; 
$duty = $energyCharges * 0.10; // Assuming duty is 10% of energy charges
$billAmount = $fixedCharges + $meterRent + $energyCharges + $duty + $govtSubsidies;
$dlAdj = -93.22; // You would get this from some previous adjustment data
$payableAmount = $billAmount + $dlAdj;

// Generate barcode (you'll need a library for a real barcode)
$barcodeValue = $consumerId; // Replace with the data you want to encode

?>

<div class="bill">
    <div class="header">
        <img src="kseb_logo.png" alt="KSEB Logo" width="80px" style="float: left;">
        <h1 style="display: inline-block;margin: 20px;">KSEB</h1><br>
      Demand/Disconnection Notice<br>
      ( Electricity Act 2003 P 56 )<br>
      Customer Care <?php echo $customerCare; ?><br>
      <?php echo $section; ?><br>
      <?php echo $sectionCode; ?>
    </div>
    <div class="barcode">
        <img src="barcode.php?data=<?php echo $barcodeValue; ?>" alt="Barcode">
    </div>

    <div>C#: <span class="value"><?php echo $consumerId; ?></span></div>
    <div>Bill#: <span class="value"><?php echo $billNumber; ?></span></div>
    <div>Name: <span class="value"><?php echo $name; ?></span></div>
    <div>Address: <span class="value"><?php echo $address; ?></span></div>
    <div>Pole: <span class="value"><?php echo $pole; ?></span></div>
    <div>Trans: <span class="value"><?php echo $transformer; ?></span></div>
    <div>Bill Area: <span class="value"><?php echo $billArea; ?></span></div>
    <div>Bill Date: <span class="value"><?php echo $billDate; ?></span></div>
    <div>Due Date: <span class="value"><?php echo $dueDate; ?></span></div>
    <div>Disconn Dt: <span class="value"><?php echo $disconnDate; ?></span></div>
    <div>Tariff: <span class="value"><?php echo $tariff; ?></span></div>
    <div>Purpose: <span class="value"><?php echo $purpose; ?></span></div>
    <div>Deposit: <span class="value"><?php echo $deposit; ?></span></div>
    <div>Meter(MM) Status: <span class="value"><?php echo $meterStatus; ?></span></div>
    <div>Load: <span class="value"><?php echo $load; ?></span></div>
    <div>Demand: <span class="value"><?php echo $demand; ?></span></div>
    <div>Phase: <span class="value"><?php echo $phase; ?></span></div>
    <div>Prv Rd Dt: <span class="value"><?php echo $prvRdDate; ?></span></div>
    <div>Cur Rd Dt: <span class="value"><?php echo $curRdDate; ?></span></div>
    <div>Mt Rd(OMF): <span class="value"><?php echo $rdOMF; ?></span></div>

    <hr>

    <div>
      <span class="label">Unit</span>
      <span class="label">Curr</span>
      <span class="label">Prev</span>
      <span class="label">Cons</span>
      <span class="label">Avg</span>
    </div>
    <div>
      <span class="label">KWH/A/I</span>
      <span class="value"><?php echo $currentReading; ?></span>
      <span class="value"><?php echo $previousReading; ?></span>
      <span class="value"><?php echo $unitsConsumed; ?></span>
      <span class="value"><?php echo $avgConsumption; ?></span>
    </div>

    <hr>

    <div><span class="label">Fixed Charges</span>: <span class="value"><?php echo number_format($fixedCharges, 2); ?></span></div>
    <div><span class="label">Meter Rent</span>: <span class="value"><?php echo number_format($meterRent, 2); ?></span></div>
    <div><span class="label">Energy Charges</span>: <span class="value"><?php echo number_format($energyCharges, 2); ?></span></div>
    <div><span class="label">Duty</span>: <span class="value"><?php echo number_format($duty, 2); ?></span></div>
    <div><span class="label">Govt. Subsidies</span>: <span class="value"><?php echo number_format($govtSubsidies, 2); ?></span></div>

    <hr>

    <div><span class="label">Bill Amount</span>: <span class="value"><?php echo number_format($billAmount, 2); ?></span></div>
    <div><span class="label">DL Adj</span>: <span class="value"><?php echo number_format($dlAdj, 2); ?></span></div>
    <div><span class="label">Payable</span>: <span class="value" style="font-weight: bold;"><?php echo number_format($payableAmount, 2); ?></span></div>

    <hr>
    <div><?php echo $readerName; ?></div>
    <div>Meter Reader</div>
    <div class="footer">
        Pay Online www.kseb.in<br>
        <?php echo date("d-m-Y H:i:s A"); ?>
    </div>
</div>

</body>
</html>