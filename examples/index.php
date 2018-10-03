<?php
include('../lib/Spaceinvoces.php');
include('../vendor/autoload.php');

// Insert your data here (you can find data by making account on our website: https://spaceinvoices.com)
// $testToken = "TOKEN";
// $testOrganizationId = "organizationId";
// $testAccountId = "accountId";

$testToken = "i3eqlLfw0Z0IyKXLaTXVoD5rxZHhQINrVfBWpIX7Spcbs5Ivurc3A6ZnQQTBPGg2";
$testOrganizationId = "5b8f857833eeacb278e3afdc";
$testAccountId = "5b8f851a33eeac2fa6e3afdb";

Spaceinvoices\Spaceinvoices::setAccessToken($testToken);

// common test data
$testFilter = array(
  "filter" => array(
    "limit" => 2
  )
);

// Test data (uncomment models you want to test)

// include('./accounts.php');
// include('./organizations.php');
// include('./documents.php');
// include('./currencies.php');
// include('./clients.php');
// include('./items.php');
// include('./payments.php');
// include('./recurrences.php');
// include('./taxes.php');

?>