<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

    }

    public function creator()
    {
        return $this->belongsTo('App\User', 'creator_id');
    }

    public function details()
    {
        return $this->hasMany('App\ExpenseDetail');
    }



}
