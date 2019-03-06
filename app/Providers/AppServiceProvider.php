<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CatPackage;
use App\Category;
use App\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $catpackages = CatPackage::with('service')->get();
        $categorys = Category::all();
        view()->share('catpackages', $catpackages);
        view()->share('categorys', $categorys);

        $newservices = Service::where('active', 1)->with('catpackage')->orderBy('id', 'desc')->limit(5)->get();
        $ranservices = Service::where('active', 1)->with('catpackage')->orderBy(\DB::raw('RAND()'))->limit(5)->get();
        view()->share('newservices', $newservices);
        view()->share('ranservices', $ranservices);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
