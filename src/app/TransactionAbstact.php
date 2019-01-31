<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 31.01.2019
 * Time: 09:29
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\TransactionAbstracts;

class TransactionAbstact extends Config
{
    private $startDate; // d.m.Y H:i:s
    private $endDate; // d.m.Y H:i:s

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate   = $endDate;

        $this->set();
    }

    public function send()
    {
        $query = new TransactionAbstracts($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send( $this->startDate, $this->endDate);

        return $query->parse();
    }

}