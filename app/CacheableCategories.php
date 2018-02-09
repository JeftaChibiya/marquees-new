<?php

namespace App;

use Cache;
use App\CategoriesCache;

/**
 * CacheableCategoryItems is a class to enable optional caching of Category items (JC, C3398189)
 * Created 11.11.2016 (JC, C3398189)
 */

class CacheableCategories implements CategoriesCache{

    /**
     * Import the service items instance (JC, C3398189)
     * @var
     */

    protected $categoriesCache;


    /**
     *  Bind the serviceItems object to the class
     * @param
     */

    public function __construct($categoriesCache)
    {

        $this->categoriesCache = $categoriesCache;

    }


    /**
     *  Use the 'all()' method from the 'EloquentServiceItems' class as an interface (JC, C3398189)
     *  method 'all()' is an interface defined as an interface in the 'interface' class
     * @return [type] [description]
     */

    public function all()
    {
        // Decorate method, in this case by caching its output
        return Cache::remember('categoriesCache.all', 60 * 60, function() {

            return $this->categoriesCache->all();

        });

    }




}