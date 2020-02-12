<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        //echo "<pre>";print_r($user->toArray()); echo "</pre>";
        if($user->status=="Y"){
            if(auth()->user()->hasRole('admin')){
                return redirect()->route('admin.home.index')->with('yes', 'เข้าสู่ระบบสำเร็จ');
            }
            if(auth()->user()->hasRole('secretary')){
                return redirect()->route('officer.dashboard.index')->with('yes', 'เข้าสู่ระบบสำเร็จ');;
            }
            if(auth()->user()->hasRole('president') || auth()->user()->hasRole('committee') || auth()->user()->hasRole('reviewer')){
                return redirect()->route('officer.dashboard.index')->with('yes', 'เข้าสู่ระบบสำเร็จ');;
            }
            if(auth()->user()->hasRole('member')){
                return redirect()->route('member.dashboard.index')->with('yes', 'เข้าสู่ระบบสำเร็จ');;
            }
            
        }elseif($user->status=="D"){
            Auth::logout();
            return redirect()->route('login.member')->with('no', 'User ของท่านยังไม่ได้ถูก อนุมัติ');  
        }elseif($user->status=="N"){
            Auth::logout();
            return redirect()->route('login.member')->with('no', 'User ถูกระงับการใช้งานชั่วครวา');  
        }
    }
}
