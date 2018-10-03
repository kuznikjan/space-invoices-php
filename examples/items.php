<?php
echo "==================== ITEMS ====================<br>";

// we need new tax for "taxes" field (we will delete it in the end)
$testTaxData = array(
  "name" => "GST 15",
  "_taxRates" => array(array("rate" => 15))
);

$createTax = Spaceinvoices\Taxes::create($testOrganizationId, $testTaxData);
$taxId = $createTax->id;

$testItemData = array(
  "name" => "Space suit",
  "description" => "Best in class suit made from durable composites.",
  "unit" => "item",
  "price" => 100,
  "taxes" => [$taxId]
);

$testItemDataEdit = array(
  "name" => "Space suit v2",
  "description" => "Best in class suit made from durable composites.",
  "unit" => "item",
  "price" => 200,
  "taxes" => [$taxId]
);

echo "================= Create =================\n";
$create = Spaceinvoices\Items::create($testOrganizationId, $testItemData);
$itemId = $create->id;
var_dump($create);

echo "\n================= Get all =================\n";
$all = Spaceinvoices\Items::all($testOrganizationId);
var_dump($all);

echo "\n================= Edit =================\n";
$edit = Spaceinvoices\Items::edit($itemId, $testItemDataEdit);
var_dump($edit);

echo "\n================= Get all with filters =================\n";
$all = Spaceinvoices\Items::all($testOrganizationId, $testFilter);
var_dump($all);

echo "\n================= Search =================\n";
$search = Spaceinvoices\Items::search($testOrganizationId, "space");
var_dump($search);

echo "\n================= Delete =================\n";
$delete = Spaceinvoices\Items::delete($itemId);
var_dump($delete);

Spaceinvoices\Taxes::delete($taxId);
?>