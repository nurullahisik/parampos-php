<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Işık
 * Date: 30.01.2019
 * Time: 15:52
 */

namespace ParamposLibrary;


use ParamposLibrary\Config;
use param\TransactionQuery AS ParamTransactionQuery;

/**
 * Class TransactionQuery
 * @package ParamposLibrary
 */
class TransactionQuery extends Config
{
    /**
     * @var
     */
    private $invoiceId;
    /**
     * @var
     */
    private $orderId;
    /**
     * @var
     */
    private $transactionId;

    /**
     * TransactionQuery constructor.
     * @param $invoiceId
     * @param $orderId
     * @param $transactionId
     */
    public function __construct($invoiceId, $orderId, $transactionId)
    {
        $this->invoiceId     = $invoiceId;
        $this->orderId       = $orderId;
        $this->transactionId = $transactionId;

        parent::set();
    }

    /**
     * @return array
     */
    public function get()
    {
        $query = new ParamTransactionQuery($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send($this->invoiceId, $this->orderId, $this->transactionId);

        return $query->parse();
    }

}