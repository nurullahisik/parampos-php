<?php

include "vendor/autoload.php";

use ParamposLibrary\TransactionQuery;
use ParamposLibrary\TransactionAbstact;
use ParamposLibrary\InstallmentPlanForMerchant;
use ParamposLibrary\InstallmentPlanForUser;
use ParamposLibrary\UpdateInstallmentPlan;
use ParamposLibrary\CardInformations;
use ParamposLibrary\Payment;

//$x = new TransactionQuery( "", "1a34afa323356", "");
//print_r($x->get());

//$x = new TransactionAbstact( "21.01.2018 00:00:00", "22.01.2018 23:59:59");
//print_r($x->get());

//$x = new InstallmentPlanForMerchant();
//print_r($x->get());

//$x = new InstallmentPlanForUser();
//print_r($x->get());

//$x = new UpdateInstallmentPlan("13815");
//$x->set(1, 0.0001);
//print_r($x->update());

//$x = new CardInformations("498749");
//print_r($x->get());

$x = new Payment();
$x->setPosId("1013");
$x->setCardHolderName("asdas adas");
$x->setCardNumber("4444444444444444");
$x->setCardExpireYear("2022");
$x->setCardExpireMonth("11");
$x->setCardCvc("111");
$x->setCardHolderPhone("");
$x->setSuccessUrl("http://localhost/param-php-0.2/test.php?status=success");
$x->setFailUrl("http://localhost/param-php-0.2/test.php?status=fail");
$x->setOrderId("1a34afa323356");
$x->setOrderDescription("");
$x->setInstallment("1");
$x->setTotalPrice("1,00");
$x->setTotalGeneralPrice("1,00");
$x->setTransactionId("1a34afa323356");
$x->setIpAddress("127.0.0.1");
$x->setReferenceUrl("http://localhost/param-php-0.2/test.php");
$x->setExtraData1("");
$x->setExtraData2("");
$x->setExtraData3("");
$x->setExtraData4("");
$x->setExtraData5("");

print_r($x->create());