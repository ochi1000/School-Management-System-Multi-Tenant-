<?php

namespace App\Http\Controllers;
use App\Tenant;

class HomeController extends Controller
{

    public function createTenant(){
        $tenant = Tenant::create([
            'plan' => 'free',
        ]);
    }

}
