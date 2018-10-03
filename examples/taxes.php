<?php
echo "==================== TAXES ====================<br>";

$testTaxData = array(
  "name" => "GST 15",
  "_taxRates" => [array(
    "rate" => 15
    )]
);

$testTaxDataEdit = array(
  "name" => "GST 20",
  "_taxRates" => [array(
    "rate" => 20
    )]
);

$testTaxRateData = array(
  "rate" => 25,
  "dateValidFrom" => "2018-01-01"
);

echo "================= Create =================\n";
$create = Spaceinvoices\Taxes::create($testOrganizationId, $testTaxData);
$taxId = $create->id;
var_dump($create);

echo "================= Add new rate =================\n";
$createRate = Spaceinvoices\Taxes::addANewRateToTax($taxId, $testTaxRateData);
var_dump($createRate);

echo "\n================= Get all =================\n";
$all = Spaceinvoices\Taxes::all($testOrganizationId);
var_dump($all);

echo "\n================= Edit =================\n";
$edit = Spaceinvoices\Taxes::edit($taxId, $testTaxDataEdit);
var_dump($edit);

echo "\n================= Get all with filters =================\n";
$all = Spaceinvoices\Taxes::all($testOrganizationId, $testFilter);
var_dump($all);

echo "\n================= Delete =================\n";
$delete = Spaceinvoices\Taxes::delete($taxId);
var_dump($delete);

?>