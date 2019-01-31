<?php
/**
 * Created by PhpStorm.
 * User: Nurullah Iþýk
 * Date: 31.01.2019
 * Time: 09:22
 */

namespace ParamposLibrary;


/**
 * Class Config
 * @package ParamposLibrary
 */
class Config
{
    /**
     * @var
     */
    public $clientCode;
    /**
     * @var
     */
    public $clientUsername;
    /**
     * @var
     */
    public $clientPassword;
    /**
     * @var
     */
    public $guid;
    /**
     * @var
     */
    public $mode;

    /**
     *
     */
    public function set()
    {
        $config = require_once __DIR__ . "/../config/config.php";

        $this->clientCode     = $config['clientCode'];
        $this->clientUsername = $config['clientUsername'];
        $this->clientPassword = $config['clientPassword'];
        $this->guid           = $config['guid'];
        $this->mode           = $config['mode'];
    }
}