<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Işık
 * Date: 31.01.2019
 * Time: 10:10
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\GetInstallmentPlanForMerchant;

/**
 * Class InstallmentPlanForMerchant
 * @package ParamposLibrary
 */
class InstallmentPlanForMerchant extends Config
{
    /**
     * InstallmentPlanForMerchant constructor.
     */
    public function __construct()
    {
        parent::set();
    }

    /**
     * @return array
     */
    public function get()
    {
        $query = new GetInstallmentPlanForMerchant($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send();

        return $query->parse();
    }
}