<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('type', 'user')->get();
        return view('user.index', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::where('type', 'user')->find($id);
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User not found or not authorized');
        }

        $user->delete();

        return redirect()->route('user.index')->with('message', 'User deleted successfully');
    }
}
