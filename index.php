<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Subnet Calculator ile IP adreslerinizi kolayca alt ağlara bölün ve her bir alt ağ için kullanılabilir IP adreslerini belirleyin. Ağ yöneticileri için ideal araç. Suat Münüklü Subnet Calculator">
    <meta name="keywords" content="Subnet Calculator, IP adres hesaplayıcı, alt ağ hesaplama, ağ yönetimi, IP adres bölme, alt ağ maskesi, CIDR hesaplama, ağ tasarımı, IP adresleme">
    <meta name="author" content="Suat Münüklü">
    <meta name="robots" content="index, follow">
    <meta property="og:publisher" content="https://www.suatmunuklu.com">
  <title>IP Subnet Calculator | IP Hesaplama</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
      <style>
        @media only screen and (max-width: 800px) {
            body {
            }
        }
    </style>
</head>
<body>

  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2 class="text-center">IP Subnet Calculator | IP Hesaplama</h2>
      </div>
      <div class="card-body">
        <form action="calculator.php" method="post">
          <div class="form-group">
            <label for="ipAddress">IP Address:</label>
            <input type="text" class="form-control" name="ipAddress" id="ipAddress" value="<?php echo isset($_POST['ipAddress']) ? $_POST['ipAddress'] : $_SERVER['REMOTE_ADDR']; ?>" required>
          </div>
          
          <div class="form-group">
            <label for="subnet">Subnet:</label>
            <select class="form-control" name="subnet" id="subnet" required>
              <?php
                for ($i = 1; $i <= 32; $i++) {
                  echo "<option value=\"$i\">$i</option>";
                }
              ?>
            </select>
          </div>
          
          <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
      </div>
    </div>
  </div>
            <div class="adsense-ad">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5136008580396306"
             crossorigin="anonymous"></script>
           
            <ins class="adsbygoogle"
              style="display:inline-block;width:550px;height:90px"
              data-ad-client="ca-pub-5136008580396306"
              data-ad-slot="8816491572"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <div class="container mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Prefix Size, Network Mask, and Usable Hosts per Subnet for Different IP Classes</h5>
        <h5 class="card-title">Farklı IP Sınıfları için Alt Ağ Maskesi ve Kullanılabilir Ana Bilgisayarlar</h5>
        
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>IP Class</th>
              <th>Prefix Size</th>
              <th>Network Mask</th>
              <th>Usable Hosts per Subnet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>A</td>
              <td>/8</td>
              <td>255.0.0.0</td>
              <td>16,777,214</td>
            </tr>
            <tr>
              <td>B</td>
              <td>/16</td>
              <td>255.255.0.0</td>
              <td>65,534</td>
            </tr>
            <tr>
              <td>C</td>
              <td>/24</td>
              <td>255.255.255.0</td>
              <td>254</td>
            </tr>
            <tr>
              <td>D (Multicast)</td>
              <td>Not Applicable</td>
              <td>Not Applicable</td>
              <td>Not Applicable</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <footer class="footer-text">
    <p>© 2014 - 2024 Tüm Hakları Saklıdır - <a href="https://www.suatmunuklu.com" target="_blank">https://www.SuatMunuklu.com</a></p>
    <p><strong>Herhangi bir veri/data saklamıyoruz.</strong></p>
  </footer>

</body>
</html>