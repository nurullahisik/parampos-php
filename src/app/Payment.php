<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Işık
 * Date: 31.01.2019
 * Time: 10:45
 */

namespace ParamposLibrary;

use ParamposLibrary\Config;
use param\Sale;

/**
 * Class Payment
 * @package ParamposLibrary
 */
class Payment extends Config
{
    /**
     * @var string
     */
    private $posId = '';
    /**
     * @var string
     */
    private $cardHolderName = '';
    /**
     * @var string
     */
    private $cardNumber = '';
    /**
     * @var string
     */
    private $cardExpireYear = '';
    /**
     * @var string
     */
    private $cardExpireMonth = '';
    /**
     * @var string
     */
    private $cardCvc = '';
    /**
     * @var string
     */
    private $cardHolderPhone = '';
    /**
     * @var string
     */
    private $failUrl = '';
    /**
     * @var string
     */
    private $successUrl = '';
    /**
     * @var string
     */
    private $orderId = '';
    /**
     * @var string
     */
    private $orderDescription = '';
    /**
     * @var int
     */
    private $installment = 1;
    /**
     * @var
     */
    private $totalPrice;
    /**
     * @var
     */
    private $totalGeneralPrice;
    /**
     * @var
     */
    private $transactionId;
    /**
     * @var
     */
    private $ipAddress;
    /**
     * @var
     */
    private $referenceUrl;
    /**
     * @var
     */
    private $extraData1;
    /**
     * @var
     */
    private $extraData2;
    /**
     * @var
     */
    private $extraData3;
    /**
     * @var
     */
    private $extraData4;
    /**
     * @var
     */
    private $extraData5;

    /**
     * Payment constructor.
     */
    public function __construct()
    {
        parent::set();
    }

    /**
     * @param mixed $posId
     */
    public function setPosId($posId)
    {
        $this->posId = $posId;
    }

    /**
     * @param string $cardHolderName
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
    }

    /**
     * @param string $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @param string $cardExpireYear
     */
    public function setCardExpireYear($cardExpireYear)
    {
        $this->cardExpireYear = $cardExpireYear;
    }

    /**
     * @param string $cardExpireMonth
     */
    public function setCardExpireMonth($cardExpireMonth)
    {
        $this->cardExpireMonth = $cardExpireMonth;
    }

    /**
     * @param string $cardCvc
     */
    public function setCardCvc($cardCvc)
    {
        $this->cardCvc = $cardCvc;
    }

    /**
     * @param string $cardHolderPhone
     */
    public function setCardHolderPhone($cardHolderPhone)
    {
        $this->cardHolderPhone = $cardHolderPhone;
    }

    /**
     * @param string $failUrl
     */
    public function setFailUrl($failUrl)
    {
        $this->failUrl = $failUrl;
    }

    /**
     * @param string $successUrl
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @param string $orderDescription
     */
    public function setOrderDescription($orderDescription)
    {
        $this->orderDescription = $orderDescription;
    }

    /**
     * @param int $installment
     */
    public function setInstallment($installment)
    {
        $this->installment = $installment;
    }

    /**
     * @param mixed $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    /**
     * @param mixed $totalGeneralPrice
     */
    public function setTotalGeneralPrice($totalGeneralPrice)
    {
        $this->totalGeneralPrice = $totalGeneralPrice;
    }

    /**
     * @param mixed $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @param mixed $referenceUrl
     */
    public function setReferenceUrl($referenceUrl)
    {
        $this->referenceUrl = $referenceUrl;
    }

    /**
     * @param mixed $extraData1
     */
    public function setExtraData1($extraData1)
    {
        $this->extraData1 = $extraData1;
    }

    /**
     * @param mixed $extraData2
     */
    public function setExtraData2($extraData2)
    {
        $this->extraData2 = $extraData2;
    }

    /**
     * @param mixed $extraData3
     */
    public function setExtraData3($extraData3)
    {
        $this->extraData3 = $extraData3;
    }

    /**
     * @param mixed $extraData4
     */
    public function setExtraData4($extraData4)
    {
        $this->extraData4 = $extraData4;
    }

    /**
     * @param mixed $extraData5
     */
    public function setExtraData5($extraData5)
    {
        $this->extraData5 = $extraData5;
    }

    public function create()
    {
        $query = new Sale(
            $this->clientCode,
            $this->clientUsername,
            $this->clientPassword,
            $this->guid,
            $this->mode
        );

        $query->send(
            $this->posId,
            $this->cardHolderName,
            $this->cardNumber,
            $this->cardExpireMonth,
            $this->cardExpireYear,
            $this->cardCvc,
            $this->cardHolderPhone,
            $this->failUrl,
            $this->successUrl,
            $this->orderId,
            $this->orderDescription,
            $this->installment,
            $this->totalPrice,
            $this->totalGeneralPrice,
            $this->transactionId,
            $this->ipAddress,
            $this->referenceUrl,
            $this->extraData1,
            $this->extraData2,
            $this->extraData3,
            $this->extraData4,
            $this->extraData5
        );

        return $query->parse();

    }

}