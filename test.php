<?php

include "vendor/autoload.php";

use ParamposLibrary\TransactionQuery;
use ParamposLibrary\TransactionAbstact;
use ParamposLibrary\InstallmentPlanForMerchant;
use ParamposLibrary\InstallmentPlanForUser;

//$x = new TransactionQuery( "", "1a34afa323356", "");
//print_r($x->send());

//$x = new TransactionAbstact( "21.01.2018 00:00:00", "22.01.2018 23:59:59");
//print_r($x->send());

//$x = new InstallmentPlanForMerchant();
//print_r($x->send());

$x = new InstallmentPlanForUser();
print_r($x->send());
