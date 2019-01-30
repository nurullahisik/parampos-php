<?php
/**
 * Created by PhpStorm.
 * User: user52
 * Date: 30.01.2019
 * Time: 15:59
 */

namespace ParamposLibrary;

class ParamConfig
{
    public $clientCode, $clientUsername, $clientPassword, $guid, $mode;
    public function set()
    {
        $config = require_once "../config/config.php";

        $this->clientCode     = $config['clientCode'];
        $this->clientUsername = $config['clientUsername'];
        $this->clientPassword = $config['clientPassword'];
        $this->guid           = $config['guid'];
        $this->mode           = $config['mode'];
    }
}