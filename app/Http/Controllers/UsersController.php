<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user)  return response()->json(['status' => 'success', 'user' => $user]);
        return response()->json(['status' => 'failed', 'message' => 'Cannot find user.']);
    }
}
