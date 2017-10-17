<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;

class UserController extends Controller
{
    public function users($id)
    {
        $users = User::findOrFail($id);

        return response()->json($users);
    }

    public function userbalance($id)
    {
        $users = User::findOrFail($id,['balance']);

        return response()->json($users);
    }
}
