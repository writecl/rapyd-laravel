<?php namespace Writecl\Rapyd;

use Collective\Html\FormBuilder;
use Collective\Html\HtmlBuilder;
use Illuminate\Support\ServiceProvider;

class RapydServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'rapyd');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'rapyd');

        //assets
        $this->publishes([__DIR__.'/../public/assets' => public_path('packages/writecl/rapyd/assets')], 'assets');

        //config
        $this->publishes([__DIR__.'/../config/rapyd.php' => config_path('rapyd.php')], 'config');
        $this->mergeConfigFrom( __DIR__.'/../config/rapyd.php', 'rapyd');


        $this->publishes([
            __DIR__.'/routes.php' => base_path().'/routes/rapyd.php',
        ], 'routes');


        if (file_exists(base_path().'/routes/rapyd.php'))
        {
            $this->loadRoutesFrom(base_path().'/routes/rapyd.php');
        } else {
            $this->loadRoutesFrom(__DIR__.'/routes.php');
        }

        include __DIR__ . '/macro.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register('Collective\Html\HtmlServiceProvider');
        $this->app->register('Writecl\Burp\BurpServiceProvider');

        Rapyd::setContainer($this->app);

        $this->app->booting(function () {
            $loader  =  \Illuminate\Foundation\AliasLoader::getInstance();

            $loader->alias('Input', 'Illuminate\Support\Facades\Input');

            $loader->alias('Rapyd'     , 'Writecl\Rapyd\Facades\Rapyd'     );

            //deprecated .. and more facade are really needed ?
            $loader->alias('DataSet'   , 'Writecl\Rapyd\Facades\DataSet'   );
            $loader->alias('DataGrid'  , 'Writecl\Rapyd\Facades\DataGrid'  );
            $loader->alias('DataForm'  , 'Writecl\Rapyd\Facades\DataForm'  );
            $loader->alias('DataEdit'  , 'Writecl\Rapyd\Facades\DataEdit'  );
            $loader->alias('DataFilter', 'Writecl\Rapyd\Facades\DataFilter');
            $loader->alias('DataEmbed' , 'Writecl\Rapyd\Facades\DataEmbed');
            $loader->alias('DataTree' , 'Writecl\Rapyd\Facades\DataTree');
            $loader->alias('Documenter', 'Writecl\Rapyd\Facades\Documenter');


        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}
