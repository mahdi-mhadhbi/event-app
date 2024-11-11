<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;

class UsersController extends Controller
{
    public function show()
{
    $users = User::where('role', '!=', 'admin')->get();

    return view('admin.users.show', compact('users'));
}

public function deleteUser($id)
{
    // Find the user
    $user = User::find($id);

    // Check if the user exists
    if (!$user) {
        // Handle the case where the user is not found
        return back()->with([
            'message' => 'User not found.',
            'alert-type' => 'error'
        ]);
    }

    // Delete the user
    $user->delete();
    return back()->with([
        'message' => 'User deleted successfully.',
        'alert-type' => 'success'
    ]);
}


}
