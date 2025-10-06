<?php

namespace End3rman\Qurik;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class QurikServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->bootComponent();

        $this->bootTagCompiler();
    }

    protected function bootTagCompiler(): void
    {
        $compiler = new QurikTagCompiler(
            app('blade.compiler')->getClassComponentAliases(),
            app('blade.compiler')->getClassComponentNamespaces(),
            app('blade.compiler')
        );

        app()->bind('qurik.compiler', fn () => $compiler);

        app('blade.compiler')->precompiler(function ($in) use ($compiler) {
            return $compiler->compile($in);
        });
    }

    protected function bootComponent()
    {
        if (file_exists(resource_path('views/qurik'))) {
            Blade::anonymousComponentPath(resource_path('views/qurik'), 'qurik');
        }

        Blade::anonymousComponentPath(__DIR__.'/../stubs/resources/views/qurik', 'qurik');
    }
}
