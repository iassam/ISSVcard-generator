<?php

require_once 'ISSVcard.class.php';

define('MAX_SIZE', 10);

$n = 1;
$file = fopen('file.vcf', 'wb');

echo "ISSVcard v1.0" . PHP_EOL;

for ($i=90000000; $i < (90000000 + MAX_SIZE); $i++) {

  // Set version
  $vcard = new ISSVcard('2.1');

// generate the content
  $reg = $vcard->setName('test'.$n)->setPhone($i)->setFullName('test drive' . $n)->setEmail('test'.$n.'@yoursite.com')->returnReg();

  echo '['.$n.'/'.MAX_SIZE.'] test' . $n . ' created!' . PHP_EOL;

  fwrite($file, $reg);

// Name counter
  $n++;
}

fclose($file);

echo 'Operation completed!' . PHP_EOL;

 ?>
