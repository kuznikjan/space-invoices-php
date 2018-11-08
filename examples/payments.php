<?php
echo "==================== PAYMENTS ====================<br>";

// we need new document, so we can add payment to it (we will delete it in the end)
$testDocumentData = array(
  "type" => "estimate",
  "_documentClient" => array(
    "name" => "Rocket Man",
    "country" => "USA"
  ),
  "_documentItems" => [
    array(
      "name" => "Space suit",
      "quantity" => 2,
      "unit" => "Item",
      "price" => 1000
    )
  ]
);

$createDocument = Spaceinvoices\Documents::create($testOrganizationId, $testDocumentData);
$docId = $createDocument->id;

$testPaymentData = array(
  "type" => "bank",
  "date" => "2018-01-01",
  "amount" => 1000
);

$testPaymentDataEdit = array(
  "type" => "bank",
  "date" => "2018-08-08",
  "amount" => 2000,
  "documentId" => "5b8fa16a33eeacc9cde3afe1"
);

echo "================= Create =================\n";
$create = Spaceinvoices\Payments::create($docId, $testPaymentData);
$paymentId = $create->id;
var_dump($create);

echo "\n================= Get all =================\n";
$all = Spaceinvoices\Payments::find($testOrganizationId);
var_dump($all);

echo "\n================= Edit =================\n";
$edit = Spaceinvoices\Payments::edit($paymentId, $testPaymentDataEdit);
var_dump($edit);

echo "\n================= Get all with filters =================\n";
$all = Spaceinvoices\Payments::find($testOrganizationId, $testFilter);
var_dump($all);

echo "\n================= Get all payments for document =================\n";
$allDocument = Spaceinvoices\Payments::findDocumentPayments($docId);
var_dump($allDocument);

echo "\n================= Delete =================\n";
$delete = Spaceinvoices\Payments::delete($paymentId);
var_dump($delete);

Spaceinvoices\Documents::delete($docId);
?>