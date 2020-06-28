<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{

    public function login(LoginRequest $request)
    {

        $country = $request->input('country');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $remember_me = $request->has('remember_me') ? "1" : "0";


        $users = User::where(['phone' => $phone, 'password' => $password, 'country' => $country, 'registration_status' => '1'])->get();
        $count = count($users);

        if(isset($users) && $count > 0)
        {
            // Making Authentication Using The Privileges Of The User As A Guard
            $user = auth()->user();
            foreach($users as $user)
            {
                $userid = $user->id;
                $username = $user->username;
            }

            // session(['Admin' => $username, 'Admin_ID' => $userid]);

            $request->session()->put(['Admin' => $username, 'Admin_ID' => $userid]);

            return redirect()->route('admin.dashboard');

        }

        else
        {
            return redirect()->back()
                    ->with(['error' => 'There is an Error with Your Login Credentials']);
        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('admin/login');
    }
}
