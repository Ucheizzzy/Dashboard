<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function admindashboard(){
        // if(Cache::has('yesterday')){ 
        //     dd('yes there is cache here');
        // }
        return view('admin.index');
    }

    public function adminlogin(){
        
        return view('admin.admin_login');
    }


    public function adminlogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');

    }
 
    public function talentcroftview(){
        // today
        $today_value = preg_replace('/[^0-9]/','', date('jS'));
        $collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$today_value");
        $today = explode(' ', preg_replace('/[^0-9]/',' ', $collection));

        // yesterday
        function makeDate($space, $dd=''){
            if ($dd=='')$dd = date("Y-m-d");
            $nd = strtotime($space, strtotime($dd));
            return date('Y-m-d', $nd);
            }
        $yday = substr(makeDate('-1 DAY'),8);


       $yesterday_collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$yday");

       $yesterday_ex = explode(' ', preg_replace('/[^0-9]/',' ', $yesterday_collection));

        Cache::put('yesterday', $yesterday_ex, now()->addDay());

    //    dd(Cache::get('yesterday'));
         $yesterday= Cache::get('yesterday');

        return view('admin.talentcroft' , compact('today', 'yesterday'));

    }

    public function juneboxview(){
          // today
        $today_value = preg_replace('/[^0-9]/','', date('jS'));
        $collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$today_value");
        $today = explode(' ', preg_replace('/[^0-9]/',' ', $collection));

        // yesterday
        function mkeDate($space, $dd=''){
            if ($dd=='')$dd = date("Y-m-d");
            $nd = strtotime($space, strtotime($dd));
            return date('Y-m-d', $nd);
            }
        $yday = substr(mkeDate('-1 DAY'),8);


       $yesterday_collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$yday");

       $yesterday_ex = explode(' ', preg_replace('/[^0-9]/',' ', $yesterday_collection));

        // Cache::put('yesterday', $yesterday_ex, now()->addDay());

    //    dd(Cache::get('yesterday'));
         $yesterday= Cache::get('yesterday');

        return view('admin.junebox', compact('today', 'yesterday'));
    }

      public function moneyrunview(){
          // today
        $today_value = preg_replace('/[^0-9]/','', date('jS'));
        $collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$today_value");
        $today = explode(' ', preg_replace('/[^0-9]/',' ', $collection));

        // yesterday
        function makDate($space, $dd=''){
            if ($dd=='')$dd = date("Y-m-d");
            $nd = strtotime($space, strtotime($dd));
            return date('Y-m-d', $nd);
            }
        $yday = substr(makDate('-1 DAY'),8);


       $yesterday_collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$yday");

       $yesterday_ex = explode(' ', preg_replace('/[^0-9]/',' ', $yesterday_collection));

        // Cache::put('yesterday', $yesterday_ex, now()->addDay());

    //    dd(Cache::get('yesterday'));
         $yesterday= Cache::get('yesterday');

        return view('admin.moneyrun', compact('today', 'yesterday'));
    }
}
