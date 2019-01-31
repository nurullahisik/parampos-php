**PARAMPOS (TURKPOS) PHP Entegrasyon Kütüphanesi**

**Örnek Kullanımlar**

*   **Transaction Query**

`  
include "vendor/autoload.php";  
use ParamposLibrary\\TransactionQuery;

$x = new TransactionQuery( "", "1a34afa323356", "");  
print\_r($x->get());
`

