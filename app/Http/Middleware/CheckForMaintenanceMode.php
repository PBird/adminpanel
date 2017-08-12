<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Illuminate\Support\Facades\Auth;
use App\siteconfig;

class CheckForMaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $app;


    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function handle($request, Closure $next)
    {

        $cookie = $request->cookie('secret-cookie');
        $secret = siteconfig::findOrFail(1)->maintenance_token;

        if($this->app->isDownForMaintenance() && !$request->is('panel/settings/maintenance/setupcookie/'.$secret))
        {
            $value =isset($cookie) ? \Illuminate\Support\Facades\Crypt::decrypt($cookie) : "tanimli degil";

            if($value != $secret)
            {
                $data = json_decode(file_get_contents($this->app->storagePath().'/framework/down'), true);
                throw new MaintenanceModeException($data['time'],$data['retry'],  $data['message']);
            }

        }

       return $next($request);
    }

}
