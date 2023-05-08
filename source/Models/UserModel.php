<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Source\Support\Hash;
use Source\Support\UploadImage;

/**
 * Class UserModel
 * @package Source\Models
 */
class UserModel extends DataLayer
{
    /**
     * @var Hash
     */
    private $hash;
    /**
     * UserModel constructor.
     */
    //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
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

    public function getUsersAjax($limit, $offset)
    {
        return $this->find()->limit($limit)->offset($offset)->fetch(true);
    }

    /**
     * @param int $id
     * @return DataLayer|null
     */
    public function getUsersById(int $id)
    {
        return ['user' => $this->findById($id), 'images' => $this->getUsersImage($id)];
    }   


    /**
     * @param int $id
     * @return DataLayer|null
     */
    public function getUsersImage(int $id)
    {
        return (new ImageModel())->find("table_name = :table_name AND table_id = :table_id", "table_name=users&table_id={$id}")->fetch();
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
     * @param $postFile
     * @return mixed
     */
    public function addUser($postData, $postFile)
    {
        $this->name = $postData['name'];
        $this->email = $postData['email'];
        $this->pass = $this->hash->hash($postData['pass']);
        $this->phone = $postData['phone'];
        $this->type = 'A';
        $this->active = 'Y';
        $status = $this->save();

        $return = array();
        if($status)
        {
            if(isset($postFile) && !empty($postFile['image']['name'])) {
                $uploadImage = new UploadImage('users', $this->data()->id, $postFile, $postData['image_id']);
                $s = $uploadImage->upload();

                $return['file'] = $s['file'];
                $return['saveImg'] = $s['saveImg'];
            }

            $return['data'] = $this->data();
            $return['status'] = $status;
        }
        else
        {
            $return['status'] = $this->fail()->getMessage();
        }
       return $return;

    }

    /**
     * @param $postData
     * @return mixed
     */
    public function editUser($postData, $postFile)
    {
        $user = $this->find("id = :id", "id={$postData['id']}")->fetch();

        $user->name = $postData['name'];
        $user->email = $postData['email'];
        if(isset($postData['new_pass']) && !empty($postData['new_pass']))
        {
            $user->pass = $this->hash->hash($postData['new_pass']);
        }
        else
        {
            $user->pass = $postData['pass'];
        }
        $user->phone = $postData['phone'];

        $status = $user->save();

        $return = array();
        if($status)
        {
            if(isset($postFile['image']) && !empty($postFile['image']['name']) && !empty($postData['id']))
            {
                $uploadImage = new UploadImage('users', $postData['id'], $postFile, $postData['image_id']);
                $s = $uploadImage->upload();

                $return['file'] = $s['file'];
                $return['saveImg'] = $s['saveImg'];
                $return['postFile'] = $s['postFile'];
            }

            $return['data'] = $user->data();
            $return['status'] = $status;
        }
        else
        {
            $return['status'] = $user->fail()->getMessage();
        }

        return $return;
    }

    public function deleteUser($id)
    {
        $uploadImage = new UploadImage('users', $id);
        $uploadImage->delete();

        $user = $this->findById($id);
        return $user->destroy();
    }
}