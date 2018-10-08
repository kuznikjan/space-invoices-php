<?php
include('../vendor/autoload.php');

// Insert your data here (you can find data by making account on our website: https://spaceinvoices.com)
$testToken = "TOKEN";
$testOrganizationId = "organizationId";
$testAccountId = "accountId";

Spaceinvoices\Spaceinvoices::setAccessToken($testToken);

// Common test data
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