<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IP Subnet Calculator - Results</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2 class="text-center">IP Subnet Calculator - IP Hesaplama Sonucu</h2>
      </div>
      <div class="card-body">
        <?php
        include 'functions.php';
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ipAddress = $_POST["ipAddress"];
            $subnet = $_POST["subnet"];

            
            $network = ip2long($ipAddress) & ~((1 << (32 - $subnet)) - 1);
            $broadcast = $network + (1 << (32 - $subnet)) - 1;

            
            echo "<p class='card-text'><strong>IP Address:</strong> $ipAddress</p>";
            echo "<p class='card-text'><strong>Network Address:</strong> " . long2ip($network) . "</p>";
            echo "<p class='card-text'><strong>Usable Host IP Range:</strong> " . long2ip($network + 1) . " - " . long2ip($broadcast - 1) . "</p>";
            echo "<p class='card-text'><strong>Broadcast Address:</strong> " . long2ip($broadcast) . "</p>";
            echo "<p class='card-text'><strong>Total Number of Hosts:</strong> " . (1 << (32 - $subnet)) . "</p>";
            echo "<p class='card-text'><strong>Number of Usable Hosts:</strong> " . ((1 << (32 - $subnet)) - 2) . "</p>";
            echo "<p class='card-text'><strong>Subnet Mask:</strong> " . long2ip(~((1 << (32 - $subnet)) - 1)) . "</p>";
            echo "<p class='card-text'><strong>Wildcard Mask:</strong> " . long2ip((1 << (32 - $subnet)) - 1) . "</p>";
            echo "<p class='card-text'><strong>Binary Subnet Mask:</strong> " . decbin(~((1 << (32 - $subnet)) - 1)) . "</p>";
            echo "<p class='card-text'><strong>IP Class:</strong> " . getIPClass($ipAddress) . "</p>";
            echo "<p class='card-text'><strong>CIDR Notation:</strong> " . $ipAddress . "/" . $subnet . "</p>";
            echo "<p class='card-text'><strong>IP Type:</strong> " . getIPType($ipAddress) . "</p>";

           
          }
        ?>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
