<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Işık
 * Date: 31.01.2019
 * Time: 09:29
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\TransactionAbstracts;

/**
 * Class TransactionAbstact
 * @package ParamposLibrary
 */
class TransactionAbstact extends Config
{
    /**
     * @var
     */
    private $startDate; // d.m.Y H:i:s
    /**
     * @var
     */
    private $endDate; // d.m.Y H:i:s

    /**
     * TransactionAbstact constructor.
     * @param $startDate
     * @param $endDate
     */
    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate   = $endDate;

        parent::set();
    }

    /**
     * @return array
     */
    public function get()
    {
        $query = new TransactionAbstracts($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send( $this->startDate, $this->endDate);

        return $query->parse();
    }

}