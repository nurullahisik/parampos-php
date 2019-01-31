<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 31.01.2019
 * Time: 10:17
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\UpdateInstallmentPlan AS ParamUpdateInstallmentPlan;

class UpdateInstallmentPlan extends Config
{
    private $Id;
    private $MO_1  = 100;
    private $MO_2  = 100;
    private $MO_3  = 100;
    private $MO_4  = 100;
    private $MO_5  = 100;
    private $MO_6  = 100;
    private $MO_7  = 100;
    private $MO_8  = 100;
    private $MO_9  = 100;
    private $MO_10 = 100;
    private $MO_11 = 100;
    private $MO_12 = 100;

    public function __construct($Id)
    {
        $this->Id = $Id;

        parent::set();
    }

    public function set($key, $value)
    {
        $key = "MO_" . $key;

        $this->$key = $value;
    }

    public function update()
    {
        $query = new ParamUpdateInstallmentPlan(
            $this->clientCode,
            $this->clientUsername,
            $this->clientPassword,
            $this->guid,
            $this->mode,
            $this->Id,
            $this->MO_1,
            $this->MO_2,
            $this->MO_3,
            $this->MO_4,
            $this->MO_5,
            $this->MO_6,
            $this->MO_7,
            $this->MO_8,
            $this->MO_9,
            $this->MO_10,
            $this->MO_11,
            $this->MO_12
        );

        $query->send();

        return  $query->parse();
    }

}