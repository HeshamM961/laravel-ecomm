<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Exception;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            try {
                $data = $request->all();
                if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                    return redirect('admin/dashboard');
                } else {
                    return redirect()->back()->with('error_message', 'Email or password is incorrect');
                }
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }
        return view('admin.auth.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
