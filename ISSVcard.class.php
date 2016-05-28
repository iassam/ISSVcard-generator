<?php

/**
 * ISSVcard 1.0
 * Author: Iassam
 */
class ISSVcard
{
  private $name = NULL;
  private $fullName = NULL;
  private $phone = NULL;
  private $finalReg = '';

  function __construct($version)
  {

    $this->finalReg = '' . PHP_EOL .
    'BEGIN:VCARD' . PHP_EOL .
    'VERSION:'. $version . PHP_EOL;
  }

  public function setName($name)
  {
    $this->name = 'N:;' . $name . ';;;';
    return $this;
  }

  public function setFullName($fullName)
  {
    $this->fullName = 'FN:' . $fullName;
    return $this;
  }

  public function setPhone($phone)
  {
    $this->phone = 'TEL;CELL:' . $phone;
    return $this;
  }

  public function setEmail($email)
  {
    $this->email = 'EMAIL;HOME:' . $email;
    return $this;
  }

  private function formatContent($param)
  {
    if ($param != NULL) {

      return $param . PHP_EOL;
    }
    else {

      return '';
    }
  }

  public function returnReg(){

    return $this->finalReg .
    $this->formatContent($this->name).
    $this->formatContent($this->fullName) .
    $this->formatContent($this->phone) .
    $this->formatContent($this->email) .
    'END:VCARD' . PHP_EOL;
  }

}

 ?>
