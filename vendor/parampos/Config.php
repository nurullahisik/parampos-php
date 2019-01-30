<?php
/**
 * Created by Payfull.
 * Date: 10/15/2018
 */

namespace param;

class Config
{
    const TEST_SERVICE_URL = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_test.asmx?wsdl';
    const PROD_SERVICE_URL = 'https://dmzws.ew.com.tr/turkpos.ws/service_turkpos_prod.asmx?wsdl';
    const TEST_MODE_FLAG = 'TEST';

    public $serviceUrl;
    public $mode;//TEST or something else
    public $clientCode;//Terminal ID, It will be forwarded by param.
    public $clientUsername;//User Name, It will be forwarded by param.
    public $clientPassword;//Password, It will be forwarded by param.
    public $guid;//Key Belonging to Member Workplace

    public function __construct($clientCode, $clientUsername, $clientPassword, $guid, $mode)
    {
        $this->clientCode = $clientCode;
        $this->clientUsername = $clientUsername;
        $this->clientPassword = $clientPassword;
        $this->guid = $guid;
        $this->mode = $mode;
        $this->serviceUrl = ($mode == self::TEST_MODE_FLAG)?self::TEST_SERVICE_URL:self::PROD_SERVICE_URL;
    }
}