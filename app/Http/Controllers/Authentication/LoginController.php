<?php

namespace App\Http\Controllers\Authentication;

use App\Models\Customer;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController
{
    public function login()
    {
        return view('Authentication.login');
    }
    public function error()
    {
        return view('Authentication.error');
    }
    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user_name' => $user->name, 'user_id' => $user->id, 'user_role' => $user->role ]);

            if (($user->role == 1 || $user->role == 2) && $user->status == 1) {
                return redirect('admin/dashboard');
            } else {
                return redirect()->back()->withInput($request->only('email', 'remember'))
                    ->withErrors([
                        'email' => __('auth.failed'),
                    ]);
            }
    
        } else {
            return redirect()->back()->withInput($request->only('email', 'remember'))
                ->withErrors([
                    'email' => __('auth.failed'),
                ]);
        }
    }
    
    public function logout()
    {
        session()->forget(['user_name', 'user_role','user_id']);

        Auth::logout();

        return redirect('/');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function datatables()
    {
        $Customer = Customer::where('CS_Status', '!=', 3)
            ->select(['CS_Id', 'CS_Name', 'CS_Phone']);
        return Datatables::of($Customer)
            ->addColumn('DT_RowIndex', function ($Customer) {
                static $index = 0;
                $index++;
                return '<span class="badge rounded-pill bg-label-primary">' . $index . '</span>';
            })
            ->rawColumns(['DT_RowIndex'])
            ->make(true);
    }
}
