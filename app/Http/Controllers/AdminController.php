<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class AdminController extends Controller
{

    public function login()
    {

        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required'
        // ]);
        // if ($request->isMethod('post')) {
        //     $data = $request->input();
        //     if (Auth::attempt(['username' => $data['username'], 'password' => $data['password'], 'admin' => '1'])) {

        //         return redirect('/admin/admin');
        //     } else {

        //         return redirect('/xyz')->with('flash_message_error', 'Email or Password Salah!');
        //     }
        // }
        // dd('nice');
        return view('login.login');
        // return view('admin.admin_login');
    }

    public function pandu(Request $request)
    {
        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        // $credentials = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);
        // echo 'ss'; die;
        // dd('nixe');
        // if(auth()->guard('user')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
        //     $user = auth()->guard('user')->user();
        //     if($user->admin ==1 ){
        //         return redirect()->route('admin.admin');
        //     } else{
        //         return view();
        //     }
        // }

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/admin');
        // }
        // return back();
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
                
                return redirect('/admin/admin');
            } else {
                echo '00';
                // return redirect('/xyz')->with('flash_message_error', 'Email or Password Salah!');
            }
        }
    }

    // public function login(){
    //     return view('login.login');
    // }
    public function admin($id = null)
    {
        // $admin = Auth::guard('masuk')->admin();
        // $sasa = Auth::guard('masuk')->user();
        // $admin = DB::table('admin')->get();
        return view('admin.admin');


    }
    public function editpro($id = null)
    {
        return view('admin.adminpage.edit_desa');
    }

    public function editang()
    {
        return view('admin.adminpage.edit_anggota');
    }


}