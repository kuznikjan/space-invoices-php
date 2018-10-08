<?php
echo "==================== CLIENTS ====================<br>";

$testClientData = array(
  "name" => "Space Exploration Technologies corp",
  "address" => "Rocket Road",
  "city" => "Hawthorne",
  "zip" => "CA 90250",
  "country" => "USA",
  "email" => "info@spacex.com",
  "contact" => "Elon M.",
  "phone" => "+1 123 456 7890",
  "note" => "Orders rocket fuel every month."
);

$testClientDataEdit = array(
  "name" => "Evil corp",
  "address" => "Rocket Road",
  "city" => "Hawthorne",
  "zip" => "CA 90250",
  "country" => "USA",
  "email" => "info@spacex.com",
  "contact" => "Elon Z.",
  "phone" => "+1 123 456 7890",
  "note" => "Orders rocket fuel every year."
);

$testClientTerm = "Space";

echo "================= Create =================";
$create = Spaceinvoices\Clients::create($testOrganizationId, $testClientData);
$clientId = $create->id;
var_dump($create);

echo "================= Get all =================";
$all = Spaceinvoices\Clients::find($testOrganizationId);
var_dump($all);

echo "================= Edit =================";
$edit = Spaceinvoices\Clients::edit($clientId, $testClientDataEdit);
var_dump($edit);

echo "================= Get all with filters =================";
$all = Spaceinvoices\Clients::find($testOrganizationId, $testFilter);
var_dump($all);

echo "================= Get by id =================";
$getById = Spaceinvoices\Clients::getById($clientId);
var_dump($getById);

echo "================= Search =================";
$search = Spaceinvoices\Clients::search($testOrganizationId, $testClientTerm);
var_dump($search);

echo "================= Delete =================";
$delete = Spaceinvoices\Clients::delete($clientId);
var_dump($delete);

?>