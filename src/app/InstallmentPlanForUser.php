<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 31.01.2019
 * Time: 10:14
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\GetInstallmentPlanForUser;

class InstallmentPlanForUser extends Config
{
    public function __construct()
    {
        $this->set();
    }

    public function send()
    {
        $query = new GetInstallmentPlanForUser($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send();

        return $query->parse();
    }
}