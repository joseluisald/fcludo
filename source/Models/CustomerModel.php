<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;
use Source\Support\Hash;
use Source\Support\UploadImage;

/**
 * Class CustomerModel
 * @package Source\Models
 */
class CustomerModel extends DataLayer
{
    /**
     * @var Hash
     */
    private $hash;
    /**
     * CustomerModel constructor.
     */
    public function __construct()
    {
        parent::__construct("customers", ["name", "email", "pass"]);

        $this->hash = new Hash();
    }

    /**
     * @return array|DataLayer|null
     */
    public function getCustomers()
    {
        return $this->find()->fetch(true);
    }

    /**
     * @param int $id
     * @return DataLayer|null
     */
    public function getCustomersById(int $id)
    {
        return ['customer' => $this->findById($id), 'images' => $this->getCustomersImage($id)];
    }   


    /**
     * @param int $id
     * @return DataLayer|null
     */
    public function getCustomersImage(int $id)
    {
        return (new ImageModel())->find("table_name = :table_name AND table_id = :table_id", "table_name=customers&table_id={$id}")->fetch();
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
    public function addCustomer($postData, $postFile)
    {
        $this->name = $postData['name'];
        $this->email = $postData['email'];
        $this->pass = $this->hash->hash($postData['pass']);
        $this->phone = $postData['phone'];
        $this->active = 'Y';
        $status = $this->save();

        $return = array();
        if($status)
        {
            if(isset($postFile) && !empty($postFile['image']['name'])) {
                $uploadImage = new UploadImage('customers', $this->data()->id, $postFile, $postData['image_id']);
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
    public function editCustomer($postData, $postFile)
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
                $uploadImage = new UploadImage('customers', $postData['id'], $postFile, $postData['image_id']);
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

    public function deleteCustomer($id)
    {
        $uploadImage = new UploadImage('customers', $id);
        $uploadImage->delete();

        $user = $this->findById($id);
        return $user->destroy();
    }
}