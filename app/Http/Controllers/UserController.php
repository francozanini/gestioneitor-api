<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function expenses($id)
    {
        return User::find($id)->expenses()->get();
    }

}
