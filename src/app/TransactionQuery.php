<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 30.01.2019
 * Time: 15:52
 */

namespace ParamposLibrary;


use paramposLibrary\ParamConfig;
use param\TransactionQuery AS ParamTransactionQuery;
use param\paramBasics\G;

class TransactionQuery extends ParamConfig
{
    private $invoiceId;
    private $orderId;
    private $transactionId;

    public function __construct($invoiceId, $orderId, $transactionId)
    {
        $this->invoiceId = $invoiceId;
        $this->orderId = $orderId;
        $this->transactionId = $transactionId;

        $this->set();
    }

    public function send()
    {
        $query = new ParamTransactionQuery($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send($this->invoiceId, $this->orderId, $this->transactionId);
        return $query->parse();
    }

}