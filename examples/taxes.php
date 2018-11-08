<?php
echo "==================== TAXES ====================<br>";

$testTaxData = array(
  "name" => "Value Added Tax",
  "abbreviation" => "VAT",
  "_taxRates" => [array(
    "rate" => 15
    )]
);

$testTaxDataEdit = array(
  "name" => "Value Added Tax 2"
);

$testTaxRateData = array(
  "rate" => 20,
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
$all = Spaceinvoices\Taxes::find($testOrganizationId);
var_dump($all);

echo "\n================= Edit =================\n";
$edit = Spaceinvoices\Taxes::edit($taxId, $testTaxDataEdit);
var_dump($edit);

echo "\n================= Get all with filters =================\n";
$all = Spaceinvoices\Taxes::find($testOrganizationId, $testFilter);
var_dump($all);

echo "\n================= Delete =================\n";
$delete = Spaceinvoices\Taxes::delete($taxId);
var_dump($delete);

?>