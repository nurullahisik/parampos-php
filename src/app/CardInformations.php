<?php
/**
 * Created by PhpStorm.
 * User: Nurullah I��k
 * Date: 31.01.2019
 * Time: 10:38
 */

namespace ParamposLibrary;

use param\Bin;

/**
 * Class CardInformations
 * @package ParamposLibrary
 */
class CardInformations extends Config
{
    /**
     * @var
     */
    private $binNumber;

    /**
     * CardInformations constructor.
     * @param $binNumber
     */
    public function __construct($binNumber)
    {
        $this->binNumber = $binNumber;

        parent::set();
    }

    /**
     * @return array|mixed
     */
    public function get()
    {
        $query = new Bin($this->clientCode, $this->clientUsername, $this->clientPassword, $this->guid, $this->mode);
        $query->send($this->binNumber);

        return $query->parse();
    }

}