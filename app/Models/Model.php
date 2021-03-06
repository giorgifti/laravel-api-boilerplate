<?php

namespace App\Models;

use App\Traits\ModelTrait;
use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model as ParentModel;

class Model extends ParentModel
{
    use UuidTrait, ModelTrait;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
