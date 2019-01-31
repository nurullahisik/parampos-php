<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Işık
 * Date: 31.01.2019
 * Time: 10:17
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\UpdateInstallmentPlan AS ParamUpdateInstallmentPlan;

/**
 * Class UpdateInstallmentPlan
 * @package ParamposLibrary
 */
class UpdateInstallmentPlan extends Config
{
    /**
     * @var
     */
    private $Id;
    /**
     * @var int
     */
    private $MO_1  = 100;
    /**
     * @var int
     */
    private $MO_2  = 100;
    /**
     * @var int
     */
    private $MO_3  = 100;
    /**
     * @var int
     */
    private $MO_4  = 100;
    /**
     * @var int
     */
    private $MO_5  = 100;
    /**
     * @var int
     */
    private $MO_6  = 100;
    /**
     * @var int
     */
    private $MO_7  = 100;
    /**
     * @var int
     */
    private $MO_8  = 100;
    /**
     * @var int
     */
    private $MO_9  = 100;
    /**
     * @var int
     */
    private $MO_10 = 100;
    /**
     * @var int
     */
    private $MO_11 = 100;
    /**
     * @var int
     */
    private $MO_12 = 100;

    /**
     * UpdateInstallmentPlan constructor.
     * @param $Id
     */
    public function __construct($Id)
    {
        $this->Id = $Id;

        parent::set();
    }

    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $key = "MO_" . $key;

        $this->$key = $value;
    }

    /**
     * @return array
     */
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