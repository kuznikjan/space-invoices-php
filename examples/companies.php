<?php
echo "==================== COMPANIES ====================<br>";

echo "\n================= Get all =================\n";
$all = Spaceinvoices\Companies::all();
var_dump($all);

echo "\n================= Search =================\n";
$search = Spaceinvoices\Companies::search("space", $testFilter);
var_dump($search);

?>