<?php
echo "==================== DOCUMENTS ====================<br>";

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

$testDocumentDataEdit = array(
  "type" => "estimate",
  "_documentClient" => array(
    "name" => "Rocket Man",
    "country" => "USA"
  ),
  "_documentItems" => [
    array(
      "name" => "Space suit",
      "quantity" => 3,
      "unit" => "Item",
      "price" => 100
    )
  ]
);

$testDocumentFilter = array(
  "filter" => array(
    "limit" => 5,
    "where" => array (
      "type" => "estimate"
    )
  )
);

echo "================= Create =================";
$create = Spaceinvoices\Documents::create($testOrganizationId, $testDocumentData);
$docId = $create->id;
var_dump($create);

echo "================= Get all =================";
$all = Spaceinvoices\Documents::all($testOrganizationId, $testDocumentFilter);
var_dump($all);


echo "================= Edit =================";
$edit = Spaceinvoices\Documents::edit($docId, $testDocumentDataEdit);
var_dump($edit);


echo "================= Get all with filters =================";
$all = Spaceinvoices\Documents::all($testOrganizationId, $testDocumentFilter);
var_dump($all);


echo "================= Get by id =================";
$getById = Spaceinvoices\Documents::getById($docId);
var_dump($getById);


echo "================= Pdf =================";
$pdf = Spaceinvoices\Documents::getPdf($docId);
var_dump($pdf);


echo "================= Delete =================";
$delete = Spaceinvoices\Documents::delete($docId);
var_dump($delete);
?>