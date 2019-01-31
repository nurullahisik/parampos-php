<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 31.01.2019
 * Time: 09:22
 */

namespace ParamposLibrary;


class Config
{
    public $clientCode;
    public $clientUsername;
    public $clientPassword;
    public $guid;
    public $mode;
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