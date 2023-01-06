<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('api')
                ->prefix('api/super-admin')
                ->group(base_path('routes/api/superAdmin.php')); 
             
            Route::middleware('api')
                ->prefix('api/school')
                ->group(base_path('routes/api/school.php'));
            
            Route::middleware('api')
                ->prefix('api/teacher')
                ->group(base_path('routes/api/teacher.php'));
                
            Route::middleware('api')
                ->prefix('api/teacher-app')
                ->group(base_path('routes/api/teacherApp.php'));

            Route::middleware('api')
                ->prefix('api/student-app')
                ->group(base_path('routes/api/studentApp.php'));

            Route::middleware('api')
                ->prefix('api/parent-app')
                ->group(base_path('routes/api/parentApp.php'));
            
            

                
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->prefix('super-admin')
                ->group(base_path('routes/web/superAdmin.php'));
            Route::middleware('web')
                ->prefix('school')
                ->group(base_path('routes/web/school.php'));
            Route::middleware('web')
                ->prefix('teacher')
                ->group(base_path('routes/web/teacher.php'));            
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
