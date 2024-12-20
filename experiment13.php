<!DOCTYPE html>
<html>
<head>
  <title>KSEB Bill Generator</title>
  <style>
    body {
      font-family: sans-serif;
    }
    .form-container {
      width: 400px;
      margin: 20px auto;
      padding: 20px;
      border: 1px solid #ccc;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], input[type="number"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>KSEB Electricity Bill Form</h2>
  <form method="post" action="process.php">

    <label for="consumerId">Consumer ID:</label>
    <input type="text" name="consumerId" id="consumerId" required>

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="previousReading">Previous Reading:</label>
    <input type="number" name="previousReading" id="previousReading" required>

    <label for="currentReading">Current Reading:</label>
    <input type="number" name="currentReading" id="currentReading" required>

    <label for="energyChargesRate">Energy Charges Rate (per unit):</label>
    <input type="number" name="energyChargesRate" id="energyChargesRate" step="0.01" required>
    
    <input type="submit" value="Generate Bill">
  </form>
</div>

</body>
</html>