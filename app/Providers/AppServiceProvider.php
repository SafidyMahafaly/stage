<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        Gate::define('admin',function($users_roles){
            $rqt =  DB::select('select role_id from role_user  where user_id = ?',[Auth::id()]);
            // dd($rqt);
                if( $rqt[0]->role_id == 1)
                    return "admin";
        });
        Gate::define('chef',function($users_roles){
            $rqt =  DB::select('select role_id from role_user  where user_id = ?',[Auth::id()]);
            if($rqt!=null)
                if( $rqt[0]->role_id == 2)
                    return "chef";
        });
        Gate::define('employer',function($users_roles){
            $rqt =  DB::select('select role_id from role_user  where user_id = ?',[Auth::id()]);
            if($rqt!=null)
                if( $rqt[0]->role_id == 3)
                    return "employer";
        });
    }
}
