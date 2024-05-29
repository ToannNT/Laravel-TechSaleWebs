<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\CatalogComposer;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Đăng ký view composer cho header.blade.php trong thư mục layout/partials
        View::composer('layout.partials.header', CatalogComposer::class);
    }

    public function register()
    {
        //
    }
}
