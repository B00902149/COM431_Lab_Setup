<?php
require '/var/www/html/vendor/autoload.php';
use Ramsey\Collection\Collection;
header("Content-Type: text/plain");

$collection = new Collection('string');
// $collection->add("Peter");
// $collection->add("Simon");
// $collection->add("Raymond");

// foreach ($collection as $word) {
    // echo $word;
    // echo "\n";
// }

// Generate random names to the collection

for ($i = 0; $i < mt_rand(1, 11); $i++) {
    $randomName = generateRandomName();
    $collection->add($randomName);
}

$sortedArray = $collection->toArray();
asort($sortedArray);

foreach ($sortedArray as $name) {
    echo $name;
    echo "\n";
}

echo "Number of names is ",$collection->count();

function generateRandomName() {
    $length = mt_rand(1, 5);
    $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomName = '';
    for ($i = 0; $i < $length; $i++) {
        $randomName .= $characters[mt_rand(0, strlen($characters) - 1)];
    }
    return $randomName;
}
?>