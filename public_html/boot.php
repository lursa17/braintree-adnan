<?php

//autoloading the packages in the vendor folder.
require "vendor/autoload.php";

//setting up braintree credentials
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('pf2gf49pptqb6dcv');
Braintree_Configuration::publicKey('nrzghfkjqw3tb3vw
');
Braintree_Configuration::privateKey('b269102882ac39f551b98d5235c74b3a');

//Booting Done.