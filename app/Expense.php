<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

    }


}
