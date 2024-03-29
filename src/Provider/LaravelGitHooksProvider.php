<?php

namespace Tilson\LaravelGitHooks\Provider;

use Illuminate\Support\ServiceProvider;

class LaravelGitHooksProvider extends ServiceProvider
{
    public function boot(){
        if ($this->app->runningInConsole()) {
            $this->commands([
                
                // InstallCommand::class,
            ]);
        }



        // $this->publishes([
		//     __DIR__ . '/../../config/youtube_api.php' => config_path('youtube_api.php'),
		// ], 'youtube');
    }

   public function register(){}
}
