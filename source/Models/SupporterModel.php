<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

/**
 * Class SupporterModel
 * @package Source\Models
 */
class SupporterModel extends DataLayer
{
    /**
     * SupporterModel constructor.
     */
    public function __construct()
    {
        parent::__construct("supporters", ["project_id", "user_id", "value"]);
    }
}