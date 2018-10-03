<?php
echo "==================== CURRENCIES ====================<br>";

echo "\n================= All =================\n";
$list = Spaceinvoices\Currencies::all();
var_dump($list);

?>