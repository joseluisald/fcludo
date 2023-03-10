<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class User
 * @package Source\Models
 */
class User extends DataLayer
{
    /**
     * User constructor.
     */
    //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
    public function __construct()
    {
        parent::__construct("usuarios", ["name", "email"]);
    }

    /**
     * @return array|DataLayer|null
     */
    public function getUsers()
    {
        return $this->find()->fetch(true);
    }

    /**
     * @param $postData
     * @return mixed
     */
    public function addClient($postData)
    {
        $this->name = $postData['name'];
        $this->email = $postData['email'];
        $this->fone = $postData['fone'];
        $this->data_nascimento = $postData['data_nascimento'];
        return $this->save();
    }
}