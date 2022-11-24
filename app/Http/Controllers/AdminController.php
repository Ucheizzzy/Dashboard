<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{
    public function admindashboard(){
        return view('admin.index');
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

        // $yesterday_value =explode('-',$yday);
      
       $yesterday_collection =  Http::get("http://69.28.95.40/megavault/bulk/talentstat?d=$yday");
       $yesterday = explode(' ', preg_replace('/[^0-9]/',' ', $yesterday_collection));
    //    dd($yday);
        return view('admin.talentcroft' , compact('today', 'yesterday'));

    }
}
