<?php
namespace Yx\Dot\Providers;
use Illuminate\Support\ServiceProvider;
class LaravelServiceProvider extends  ServiceProvider{
    public function boot()
    {
        echo 11111;die;
    }
}