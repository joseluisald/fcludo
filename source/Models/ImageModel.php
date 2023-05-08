<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class ImageModel
 * @package Source\Models
 */
class ImageModel extends DataLayer
{
    /**
     * ImageModel constructor.
     */
    public function __construct()
    {
        parent::__construct("images", ["table_name", "table_id", "image"]);
    }
}