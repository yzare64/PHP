<?php

namespace App\Providers;

use App\Services\FooService;
use Illuminate\Database\Eloquent\Collection;
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
//        $this->app->singleton('fooService' , function () {
//            return new FooService('hesam');
//        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Collection::macro('flattenTree', function() {
            $items = [];
            foreach ($this->items as $node) {
                $items = array_merge($items, $this->flattenNode($node));
            }

            return new static($items);
        });


        Collection::macro('flattenNode', function($node) {
            $items = [];
            $items[] = $node;
            foreach ($node->children as $childNode) {
                $items = array_merge($items, $this->flattenNode($childNode));
            }
            $node->unsetRelation('children');
            return $items;
        });
    }
}
