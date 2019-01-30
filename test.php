<?php

include "vendor/autoload.php";

use ParamposLibrary\TransactionQuery;

$x = new TransactionQuery( "", "1a34afa323356", "");
print_r($x->send());