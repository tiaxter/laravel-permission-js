<?php

namespace Tiaxter\LaravelPermissionJs;

use Auth;
use Blade;
use Illuminate\Support\ServiceProvider;

class LaravelPermissionJsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Blade::directive('permissions', function () {
            $permissionsApplied = (Auth::user() !== null) ? Auth::user()->getAllPermissions()->pluck('name')->toJson() : json_encode([]);
            return "<!-- Permissions -->
            <script type='text/javascript'>
            const permissionsApplied = $permissionsApplied;
            function can(permissionName) {
                return permissionsApplied.indexOf(permissionName) !== -1;
            }
            </script>";
        });
    }
}
