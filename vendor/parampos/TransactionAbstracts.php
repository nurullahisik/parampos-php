<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 22.01.2019
 * Time: 16:31
 */

namespace param;

use param\paramBasics\TP_Mutabakat_Ozet;

class TransactionAbstracts extends Config
{
    const ERR_TRX = 'ERR_TRX';
    protected $response;//request response

    public function __construct($clientCode, $clientUsername, $clientPassword, $guid, $mode)
    {
        parent::__construct($clientCode, $clientUsername, $clientPassword, $guid, $mode);
    }

    public function send($tarih_bas, $tarih_bit)
    {
        $client = new \SoapClient($this->serviceUrl);
        $queryObj = new TP_Mutabakat_Ozet($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $tarih_bas, $tarih_bit);
        $this->response = $client->TP_Mutabakat_Ozet($queryObj);
    }

    public function parse()
    {
        //response has wrong format
        if(is_object($this->response) == False)
        {
            return array(
                'Sonuc' => -2,
                'Sonuc_Str' => 'Param response has wrong format',
            );
        }
        //query problem or transaction not found
        elseif($this->response->TP_Mutabakat_OzetResult->Sonuc == '0')
        {
            $result['TURKPOS_RETVAL_Sonuc_Str'] = $this->response->TP_Mutabakat_OzetResult->Sonuc_Str;
            $result['TURKPOS_RETVAL_Sonuc'] = $this->response->TP_Mutabakat_OzetResult->Sonuc;
        }
        //param give wrong format
        elseif(isset($this->response->TP_Mutabakat_OzetResult->DT_Bilgi->any) == False)
        {
            return [];
        }

        $xml = $this->response->TP_Mutabakat_OzetResult->DT_Bilgi->any;

        $xmlStr = "<?xml version='1.0' standalone='yes'?><root>$xml</root>";
        $xmlStr    = str_replace(["diffgr:","msdata:"],'', $xmlStr);
        $data = @simplexml_load_string($xmlStr);

        //error in xml format
        if($data === False)
        {
            return [];
        }

        //return the results same as 3d post results
        $transactionResult = (array)$data->diffgram->NewDataSet->DT_Mutabakat_Ozet;

        print_r($transactionResult);


    }

}