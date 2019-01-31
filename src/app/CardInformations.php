<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 31.01.2019
 * Time: 10:38
 */

namespace ParamposLibrary;

use param\Bin;

class CardInformations extends Config
{
    private $binNumber;
    public function __construct($binNumber)
    {
        $this->binNumber = $binNumber;

        parent::set();
    }

    public function get()
    {
        $query = new Bin($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send($this->binNumber);

        return $query->parse();
    }

}