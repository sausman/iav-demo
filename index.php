<?php

require('./vendor/autoload.php');

DwollaSwagger\Configuration::$access_token = $_ENV["DWOLLA_SANDBOX_TOKEN"];
$dwolla = new DwollaSwagger\ApiClient("https://api-sandbox.dwolla.com");
$customersApi = new DwollaSwagger\CustomersApi($dwolla);
$iavToken = $customersApi->getCustomerIavToken($_ENV["DWOLLA_CUSTOMER_ID"])->token;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>IAV Demo</title>
  <script src="https://cdn.dwolla.com/1/dwolla.js"></script>
</head>
<body>
  <div id="container"></div>

  <pre style="
    max-width: 640px;
    margin: 20px auto;
    background: #eee;
    padding:  20px;
    font-size: 20px;
    text-align: center;
  "><?= $iavToken ?>

<?= $_ENV["DWOLLA_CUSTOMER_ID"] ?></pre>

  <script type="text/javascript">
    var iavToken = '<?= $iavToken ?>';
    dwolla.configure('sandbox');
    dwolla.iav.start(iavToken, {
      container: 'container',
      stylesheets: [
        'https://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext'
      ],
      microDeposits: false,
      fallbackToMicroDeposits: true,
      backButton: true,
      subscriber: function(state) {
        console.log('currentPage:', state.currentPage, 'error:', JSON.stringify(state.error))
      }
    }, function(err, res) {
      console.log('Error: ' + JSON.stringify(err) + ' -- Response: ' + JSON.stringify(res));
    })
  </script>
</body>
</html>
