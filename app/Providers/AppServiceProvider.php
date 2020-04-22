<?php

namespace App\Providers;

use App\Applicant;
use App\Article;
use App\Bio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        view()->composer('*', function ($view) {
            $appname = DB::table('titles')->first();
            $title = $appname->name;
            $forms = DB::table('forms')->get()->all();
            $banks = DB::table('banks')->get()->all();
            $roles = DB::table('roles')->get()->all();
            $users = DB::table('users')->get()->all();
            $solds = DB::table('solds')->get()->all();
            // statistics logic
            $formNo = DB::table('forms')->count();
            $btech_gh_sold = DB::table('solds')->where('form_id', 5)->count();
            $btech_gh_remaining = DB::table('vouchers')->where('form_id', 5)->count();
            if (($btech_gh_sold + $btech_gh_remaining) == 0) {
                $btech_gh_remaining_percentage= 0;
            } else {
                $btech_gh_remaining_percentage =((($btech_gh_sold + $btech_gh_remaining)-($btech_gh_sold))/($btech_gh_sold + $btech_gh_remaining))*100;
            }
            $btech_foreign_sold = DB::table('solds')->where('form_id', 4)->count();
           $btech_foreign_remaining = DB::table('vouchers')->where('form_id', 4)->count();
            if (($btech_foreign_sold + $btech_foreign_remaining) == 0) {
                $btech_foreign_remaining_percentage= 0;
            } else {
                $btech_foreign_remaining_percentage =((($btech_foreign_sold + $btech_foreign_remaining)-($btech_foreign_sold))/($btech_foreign_sold + $btech_foreign_remaining))*100;
            }
            $btech_topup_foreign_sold = DB::table('solds')->where('form_id', 3)->count();
            $btech_topup_foreign_remaining = DB::table('vouchers')->where('form_id', 3)->count();
            if (($btech_topup_foreign_sold + $btech_topup_foreign_remaining) == 0) {
                $btech_topup_foreign_remaining_percentage= 0;
            } else {
                $btech_topup_foreign_remaining_percentage =((($btech_topup_foreign_sold + $btech_topup_foreign_remaining)-($btech_topup_foreign_sold))/($btech_topup_foreign_sold + $btech_topup_foreign_remaining))*100;
            }

            $hnd_foreign_sold = DB::table('solds')->where('form_id', 2)->count();
            $hnd_foreign_remaining = DB::table('vouchers')->where('form_id', 2)->count();
            if (($hnd_foreign_sold + $hnd_foreign_remaining) == 0) {
                $hnd_foreign_remaining_percentage= 0;
            } else {
                $hnd_foreign_remaining_percentage =((($hnd_foreign_sold + $hnd_foreign_remaining)-($hnd_foreign_sold))/($hnd_foreign_sold + $hnd_foreign_remaining))*100;
            }


            $hnd_gh_sold = DB::table('solds')->where('form_id', 1)->count();
            $hnd_gh_remaining = DB::table('vouchers')->where('form_id', 1)->count();
            if (($hnd_gh_sold + $hnd_gh_remaining) == 0) {
                $hnd_gh_remaining_percentage= 0;
            } else {
                $hnd_gh_remaining_percentage =((($hnd_gh_sold + $hnd_gh_remaining)-($hnd_gh_sold))/($hnd_gh_sold + $hnd_gh_remaining))*100;
            }

            $regions = DB::table('regions')->get()->all();
            $countries = DB::table('countries')->get()->all();

            $Selectedprogrammes = DB::table("programmes")->get()->all();

               $data = Applicant::all()->first();
            $view->with(compact('title', 'forms', 'banks', 'roles', 'users', 'solds', 'formNo', 'btech_gh_remaining', 'btech_gh_sold',
                'btech_foreign_remaining', 'btech_foreign_sold', 'btech_topup_foreign_remaining', 'btech_topup_foreign_sold', 'hnd_foreign_remaining', 'hnd_foreign_sold',
                'hnd_gh_remaining', 'hnd_gh_sold','hnd_gh_remaining_percentage','hnd_foreign_remaining_percentage','btech_topup_foreign_remaining_percentage',
                 'btech_foreign_remaining_percentage','btech_gh_remaining_percentage','regions','countries','data','Selectedprogrammes'));

        });

    }
}
