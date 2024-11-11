<?php

namespace App\Http\Controllers\Organisateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    public function profile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('Organiseur.profile.show',compact('user'));
    }
    public function updateProfile(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'nullable|integer',
        'phone' => 'nullable|string',
        'email' => 'required|string|email|max:255',
        // Add other validation rules as needed
    ]);

    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->age = $request->age;
    $user->phone = $request->phone;
    $user->email = $request->email;

    if ($request->hasFile('imageUser')) {
        $imageName = time().'.'.$request->imageUser->getClientOriginalExtension();
        $request->imageUser->storeAs('images', $imageName, 'public');
        $user->imageUser = 'images/users/'.$imageName;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully');
}

}
