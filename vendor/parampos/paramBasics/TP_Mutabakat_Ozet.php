<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 22.01.2019
 * Time: 16:26
 */

namespace param\paramBasics;


class TP_Mutabakat_Ozet
{
    public $GUID;//Key Belonging to Member Workplace
    public $Tarih_Bas;
    public $Tarih_Bit;//
    public $G;//control and security object

    public function __construct($CLIENT_CODE, $CLIENT_USERNAME , $CLIENT_PASSWORD, $guid, $tarih_bas, $tarih_bit)
    {
        $this->GUID = $guid;
        $this->Tarih_Bas= $tarih_bas;
        $this->Tarih_Bit = $tarih_bit;
        $this->G = new G($CLIENT_CODE, $CLIENT_USERNAME , $CLIENT_PASSWORD);
    }
}