<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BestController extends Controller
{
    //ROUTE
    public function index()
    {
        return view('index');
    }

    public function userList()
    {
        $users = Member::all();
        return view('userList', compact('users'));
    }

//Create User
    public function createUser(Request $request)
    {
        $path = null;
        if($request->has('profile_picture')){
            $path = $request->file('profile_picture')->store('profile_picture');
        }
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'profile_picture' => $path,
            'password' => $request->password,
        ]);
        return back();
    }

// View User
    public function viewUser($id)
    {
        $user = Member::find($id);
        return view('viewUser', compact('user'));
    }

// Update User
    public function updateUser($id)
    {
        $user = Member::find($id);
        return view('update', compact('user'));
    }

// Delete User
    public function deleteUser($id)
    {
        $member = Member::find($id);
        $path = $member->profile_picture;
        Storage::delete($path);
        $member->delete();
        return back();
    }

// Update Successfully
    public function updateUserSuccessFully(Request $request)
    {
        $id = $request->id;
        $user = Member::find($id);


        $path = $user->profile_picture;
        if($request->has('profile_picture')){
            Storage::delete($path);
            $path = $request->file('profile_picture')->store('profile_picture');
        }
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'profile_picture' => $path,
            'password' => $request->password,
        ]);
        return redirect(route('userList'));
    }
}
