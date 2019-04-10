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
$logo_path = __DIR__."/si_logo.png";

echo "================= Create =================";
$create = Spaceinvoices\Organizations::create($testAccountId, $testOrgData);
$orgId = $create->id;
var_dump($create);

echo "================= Upload logo =================";
$logo = Spaceinvoices\Organizations::uploadImage($orgId, $logo_path, "logo");
var_dump($logo);

echo "================= Get by id =================";
$get = Spaceinvoices\Organizations::getById($orgId);
var_dump($get);

echo "================= All =================";
$list = Spaceinvoices\Organizations::find($testAccountId);
var_dump($list);

echo "================= Business Premises =================";
$bp = Spaceinvoices\Organizations::getBusinessPremises($orgId);
var_dump($bp);
?>