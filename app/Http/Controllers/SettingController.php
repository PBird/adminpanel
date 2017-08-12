<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use App\siteconfig;
use Illuminate\Http\Response;

class SettingController extends Controller
{
    //

      public function __construct()
    {
        $this->middleware('auth',['except' => 'setcookie']);
    }


    public function MaintenanceMode(Request $request)
    {

        $Maintenance = $request->input('maintenance');

        if($Maintenance)
        {
            srand(time());
            $random = encrypt(rand());
            $siteconfig = siteconfig::findOrNew(1);
            $siteconfig->maintenance_token = $random;
            $siteconfig->save();
            \Artisan::call('down');

            return back()->withCookie(cookie()->forever('secret-cookie', $random))->with('success', 'Maintenance Mode has turned on');

         }
        else
        {
            \Artisan::call('up');
         return back()->with('success', 'Maintenance Mode has turned off');
        }


    }

    public function ShowMaintenance() {


       $check = \App::isDownForMaintenance();
       $maintenance_token = siteconfig::findOrFail(1)->maintenance_token;
       if(isset($maintenance_token))
       $maintenance_link = route('createcookie',['secret' => $maintenance_token ]);
       return view('panel.pages.setting_maintenance')->with('check',$check)->with('maintenance_link' , $maintenance_link);

    }

      public function setcookie($randomstring)
    {
         $response = new Response('Cookie installed');
         $response->withCookie(cookie()->forever('secret-cookie', $randomstring));

         return $response;

    }





}
