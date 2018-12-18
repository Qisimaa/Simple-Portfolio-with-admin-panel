<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            if (Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
                Session::put('adminSession',$data['email']);
                return view('/admin.dashboard'); die;
            }
            else{
                return redirect('admin')->with('flash_message_error','Invalid Username or Password');die;
            }
        }
        return view('admin.admin_login');
    }
    public function dashboard(){

        return view('admin.dashboard');
    }
    public function chkPass(Request $request){
        $data=$request->all();
        $current_password=$data['current_pwd'];
        $check_password=User::where(['admin'=>'1'])->first();
        if (Hash::check($current_password,$check_password->password))
        {
            echo "true";die;
        }
        else{
            echo "false"; die;
        }
    }

    public function update_Pwd(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            $check_password=User::where(['email'=>Auth::user()->email])->first();
            $current_password=$data['current_pwd'];
            if (Hash::check($current_password,$check_password->password))
            {
                $password=bcrypt($data['new_pwd']);
                User::where('id','2')->update(['password'=>$password]);
                return redirect('settings/')->with('flash_message_error','Password Updated Successfully');die;
            }
            else{
                return redirect('settings/')->with('flash_message_error','Incorrect Current Password');die;
            }
        }
    }


    public function settings(){

        return view('admin.settings');
    }
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successfully');die;
    }
}
