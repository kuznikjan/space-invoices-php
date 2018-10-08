<?php
echo "==================== CURRENCIES ====================<br>";

echo "\n================= All =================\n";
$list = Spaceinvoices\Currencies::find();
var_dump($list);

?>