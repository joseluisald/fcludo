<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class FaqModel
 * @package Source\Models
 */
class FaqModel extends DataLayer
{
    //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
    /**
     * FaqModel constructor.
     */
    public function __construct()
    {
        parent::__construct("faqs", ["ask", "answer"]);
    }

    /**
     * @return array|DataLayer|null
     */
    public function getFaqs()
    {
        return $this->find()->fetch(true);
    }

    /**
     * @param $postData
     * @return mixed
     */
    public function addFaq($postData)
    {
        $this->ask = $postData['ask'];
        $this->answer = $postData['answer'];
        $status = $this->save();

        $return = array();
        if($status)
        {
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
     * @param int $id
     * @return DataLayer|null
     */
    public function getFaqsById(int $id)
    {
        return $this->findById($id);
    }

    /* @param $postData
     * @return mixed
     */
    public function editFaq($postData)
    {
        $faq = $this->findById($postData['id']);
        $faq->ask = $postData['ask'];
        $faq->answer = $postData['answer'];
        $status = $faq->save();

        $return = array();
        if($status)
        {
            $return['data'] = $faq->data();
            $return['status'] = $status;
        }
        else
        {
            $return['status'] = $faq->fail()->getMessage();
        }

        return $return;
    }
}