<?php

namespace Source\Support;

/**
 * Class Response
 * @package Source\Support
 */
Class Response
{
    /**
     * @var
     */
    private $text;
    /**
     * @var
     */
    private $title;
    /**
     * @var
     */
    private $type;
    /**
     * @var
     */
    private $arr;
    /**
     * @var
     */
    private $page;


    /**
     * @param $title
     * @param $text
     * @param $type
     * @param array $arr
     */
    public function emit($title, $text, $type, $page = '', $arr = array())
    {
        $this->text  = $text;
        $this->title  = $title;
        $this->type  = $type;
        $this->arr   = $arr;
        $this->page   = $page;

        echo json_encode($this->generateMsg());
    }

    /**
     * @param $arr
     * @return void
     */
    public function json($arr = array())
    {
        echo json_encode($arr);
    }

    /**
     * @return array
     */
    private function generateMsg()
    {   
        return array('title' => $this->title, 'text' => $this->text, 'type' => $this->type, 'page' => $this->page, 'config' => $this->arr);
    }
}