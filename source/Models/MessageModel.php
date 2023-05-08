<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 *
 */
class MessageModel extends DataLayer
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct("messages", ["name", "email", "message"]);
    }

    public function getMessages()
    {
        return $this->find()->fetch(true);
    }

    public function getMessagesAjax($limit, $offset)
    {
        return $this->find()->limit($limit)->offset($offset)->fetch(true);
    }

    public function readMessage(int $id)
    {
        return $this->findById($id);
    }

    /**
     * @param $postData
     * @return bool
     */
    public function addMessage($postData)
    {
        $this->name = $postData['name'];
        $this->email = $postData['email'];
        $this->phone = $postData['phone'];
        $this->message = $postData['message'];
        return $this->save();
    }
}