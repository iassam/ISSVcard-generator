# ISSVcard-generator PHP
Generate vcard format file

#Installation / Usage

1. require_once 'ISSVcard.class.php';
2. $vcard = new ISSVcard('3.0');
3. $vcard->setName('test')
          ->setPhone('99999999')
          ->setFullName('test drive' . $n)
          ->setEmail('test@yoursite.com')
          ->returnReg();

#License
The ISSVcard-generator is open-sourced software licensed under the MIT license.
