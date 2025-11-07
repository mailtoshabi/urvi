<?php

namespace App\Providers;

use App\Http\Utilities\Utility;
use App\Models\Project;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class ComposerServiceProvider extends ServiceProvider
{

    /*public function __construct($app, Request $request)
    {
        parent::__construct($app);

        $this->request = $request;
    }*/

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        view()->composer(['front.includes.footer'], function ($view) {
            $recentProjects = Project::orderByDesc('id')->where('status',Utility::ITEM_ACTIVE)->limit(5)->get();
            $view->with('recentProjects',$recentProjects);
        });



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
