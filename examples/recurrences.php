<?php
echo "==================== RECURRENCES ====================<br>";

// we need new document, so we can add recurrence to it (we will delete it in the end)
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

$testReccurenceData = array(
  "name" => "Monthly recurrence",
  "type" => "month",
  "dateFirst" => "2018-01-01",
  "numRecurrences" => 2
);

echo "================= Create =================\n";
$create = Spaceinvoices\Recurrences::create($docId, $testReccurenceData);
$recurrenceId = $create->id;
var_dump($create);

echo "\n================= Get all with filters =================\n";
$all = Spaceinvoices\Recurrences::find($testOrganizationId, $testFilter);
var_dump($all);

echo "\n================= Get all recurrences for document =================\n";
$allDocument = Spaceinvoices\Recurrences::findDocumentRecurrences($docId);
var_dump($allDocument);

echo "\n================= Delete =================\n";
$delete = Spaceinvoices\Recurrences::delete($recurrenceId);
var_dump($delete);

Spaceinvoices\Documents::delete($recurrenceId);
?>