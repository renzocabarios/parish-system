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

    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique',
            'password' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'sometimes|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'fathers_name' => 'required| string',
            'fathers_citizenship' => 'required | string',
            'mothers_name' => 'required |string',
            'mothers_citizenship' => 'required|string',
            'address' => 'required | string',
        ]);

        $user = User::create([
            'id' => Str::uuid(),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'fathers_name' => $request->fathers_name,
            'fathers_citizenship' => $request->fathers_citizenship,
            'mothers_name' => $request->mothers_name,
            'mothers_citizenship' => $request->mothers_citizenship,
            'address' => $request->address,
        ]);


        if ($user) return response()->json(['status' => 'success', 'message' => 'Successfully created a user.']);
        return response()->json(['status' => 'failed', 'message' => 'Failed to create a user.']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string',
            'middle_name' => 'sometimes|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'fathers_name' => 'required| string',
            'fathers_citizenship' => 'required | string',
            'mothers_name' => 'required |string',
            'mothers_citizenship' => 'required|string',
            'address' => 'required | string',
        ]);

        $user = User::find($id);
        if (!$user) return response()->json(['status' => 'failed', 'message' => 'Failed to update a user.']);

        $user->update([$request->all()]);
        return response()->json(['status' => 'success', 'message' => 'Successfully updated a user.']);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (!$user) return response()->json(['status' => 'failed', 'message' => 'Failed to delete a user.']);
        $user->delete();
        return response()->json(['status' => 'success', 'message' => 'Successfully deleted a user.']);
    }
}
