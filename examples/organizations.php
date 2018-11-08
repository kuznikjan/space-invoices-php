<?php
echo "==================== ORGANIZATIONS ====================<br>";

$testOrgData = array(
  "name" => "Space Exploration Technologies corp",
  "address" => "Rocket Road",
  "city" => "Hawthorne",
  "zip" => "CA 90250",
  "country" => "USA",
  "IBAN" => "123454321 123454321",
  "bank" => "Bank Of America",
);

echo "================= Create =================";
$create = Spaceinvoices\Organizations::create($testAccountId, $testOrgData);
$orgId = $create->id;
var_dump($create);

echo "================= Get by id =================";
$get = Spaceinvoices\Organizations::getById($orgId);
var_dump($get);

echo "================= All =================";
$list = Spaceinvoices\Organizations::find($testAccountId);
var_dump($list);
?>