<?php

namespace App\Providers;

use App\Services\Currency\CurrencyService;
use App\Services\RecentlyViewed\RecentlyViewedService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CurrencyService::class, function(){
            return new CurrencyService(
                config("currency.base"),
                config("currency.rates"),
                config("currency.default"),
            );
        });
        $this->app->singleton(RecentlyViewedService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('currency_money', function ($amount,$fromCurrencyCode=null) {
            return "<?php echo App\Facades\Currency::convertAndFormatToDefault($amount,$fromCurrencyCode) ?>";
        });
    }
}
