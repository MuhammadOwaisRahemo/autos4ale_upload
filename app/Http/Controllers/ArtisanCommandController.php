<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class ArtisanCommandController extends Controller
{
    public function config_cache(){
        Artisan::call('config:cache');
        return Artisan::output();
    }

    public function route_cache(){
        Artisan::call('route:cache');
        return Artisan::output();
    }

    public function cache_clear(){
        Artisan::call('cache:clear');
        return Artisan::output();
    }

    public function route_list(){
        Artisan::call('route:list');
        return dump(Artisan::output());
    }

    public function migrate(){
        Artisan::call('migrate');
        return Artisan::output();
    }

    public function optimize(){
        Artisan::call('optimize:clear');
        return Artisan::output();
    }
}
