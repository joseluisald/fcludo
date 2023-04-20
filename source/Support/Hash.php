<?php

namespace Source\Support;

/**
 * Class Hash
 * @package Source\Support
 */
class Hash
{
    /**
     * @var
     */
    private $keyword;

    /**
     * @param $keyword
     * @return string
     */
    public function hash($keyword)
    {
        $this->keyword = $keyword;
        return $this->createHash();
    }

    /**
     * @return string
     */
    private function createHash()
    {
        $md5 = md5($this->keyword);

        $md5_2 = md5($md5);
        $sha = sha1($md5_2);

        return base64_encode($sha);
    }
}
