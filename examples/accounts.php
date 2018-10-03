<?php
echo "==================== ACCOUNTS ====================<br>";

$testLoginData = array(
  "email" => "rocketman@example.com",
  "password" => "supersecret"
);

echo "================= Create =================";
$create = Spaceinvoices\Accounts::create($testLoginData);
var_dump($create);

echo "================= Login =================";
$login = Spaceinvoices\Accounts::login($testLoginData);
var_dump($login);

echo "================= Get by id =================";
$getById = Spaceinvoices\Accounts::getById($testAccountId);
var_dump($getById);

echo "================= Is unique =================";
$unique = Spaceinvoices\Accounts::isUnique("rocketman@example.com");
var_dump($unique);
?>