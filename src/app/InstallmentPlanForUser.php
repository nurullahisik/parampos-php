<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Işık
 * Date: 31.01.2019
 * Time: 10:14
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\GetInstallmentPlanForUser;

/**
 * Class InstallmentPlanForUser
 * @package ParamposLibrary
 */
class InstallmentPlanForUser extends Config
{
    /**
     * InstallmentPlanForUser constructor.
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
        $query = new GetInstallmentPlanForUser($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send();

        return $query->parse();
    }
}