**PARAMPOS (TURKPOS) PHP Entegrasyon Kütüphanesi**

```
Bu proje https://github.com/PARAMPOS/param-php kütüphanesi 
kullanılarak geliştirilmiştir.
```

**Örnek Kullanımlar**

*   **Transaction Query**

```  
include "vendor/autoload.php";  
use ParamposLibrary\TransactionQuery;

$x = new TransactionQuery( "", "1a34afa323356", "");  
print_r($x->get());
```

* **Transaction Abstact**

`````
include "vendor/autoload.php";  
use ParamposLibrary\TransactionAbstact;

$x = new TransactionAbstact( "21.01.2018 00:00:00", "22.01.2018 23:59:59");
print_r($x->get());
`````

* **Installment Plan For Merchant**

`````
include "vendor/autoload.php";  
use ParamposLibrary\InstallmentPlanForMerchant;

$x = new InstallmentPlanForMerchant();
print_r($x->get());
`````

* **Installment Plan For User**

`````
include "vendor/autoload.php";  
use ParamposLibrary\InstallmentPlanForUser;

$x = new InstallmentPlanForUser();
print_r($x->get());
`````

* **Update Installment Plan**

`````
include "vendor/autoload.php";  
use ParamposLibrary\UpdateInstallmentPlan;

$x = new UpdateInstallmentPlan("13815");
$x->set(1, 0.0001); // 1 taksit için
$x->set(2, 0.0001); // 2 taksit için
$x->set(3, 0.0001); // 3 taksit için
$x->set(4, 0.0001); // 4 taksit için
...
...
print_r($x->update());
`````

* **Card Informations**

`````
include "vendor/autoload.php";  
use ParamposLibrary\CardInformations;

$x = new CardInformations("498749");
print_r($x->get());
`````

* **Payment**


`````
include "vendor/autoload.php";  
use ParamposLibrary\Payment;

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
`````
