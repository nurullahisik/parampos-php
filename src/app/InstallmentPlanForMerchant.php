<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 31.01.2019
 * Time: 10:10
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\GetInstallmentPlanForMerchant;

class InstallmentPlanForMerchant extends Config
{
    public function __construct()
    {
        parent::set();
    }

    public function get()
    {
        $query = new GetInstallmentPlanForMerchant($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send();

        return $query->parse();
    }
}