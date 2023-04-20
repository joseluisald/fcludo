<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Source\Support\Hash;

/**
 * Class User
 * @package Source\Models
 */
class User extends DataLayer
{
    /**
     * @var Hash
     */
    private $hash;
    /**
     * User constructor.
     */
    //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["name", "email", "pass"]);

        $this->hash = new Hash();
    }

    /**
     * @return array|DataLayer|null
     */
    public function getUsers()
    {
        return $this->find()->fetch(true);
    }


    /**
     * @param int $id
     * @return DataLayer|null
     */
    public function getUsersById(int $id)
    {
        return $this->findById($id);
    }

    /**
     * @return array|DataLayer|null
     */
    public function auth($postData)
    {
        return $this->find("email = :email AND pass = :last", "email={$postData['email']}&last={$this->hash->hash($postData['pass'])}")->fetch();
    }

    /**
     * @param $postData
     * @return mixed
     */
    public function addUser($postData)
    {
        $this->name = $postData['name'];
        $this->email = $postData['email'];
        $this->pass = $this->hash->hash($postData['pass']);
        $this->phone = $postData['phone'];
        $this->type = 'A';
        $this->active = 'Y';
        return $this->save();
    }

    /**
     * @param $postData
     * @return mixed
     */
    public function editUser($postData)
    {
        $user = $this->findById($postData['id']);
        if(isset($postData['name']) && !empty($postData['name']))
            $user->name = $postData['name'];
        if(isset($postData['email']) && !empty($postData['email']))
            $user->email = $postData['email'];
        if(isset($postData['pass']) && !empty($postData['pass']))
            $user->pass = $this->hash->hash($postData['pass']);
        if(isset($postData['phone']) && !empty($postData['phone']))
            $user->phone = $postData['phone'];
        return $user->save();
    }
}