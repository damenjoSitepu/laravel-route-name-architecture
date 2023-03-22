<?php 

namespace App\Transcendent\Facades;

// Facade Mode
use Illuminate\Support\Facades\Facade;

/**
 * Documentation
 * 
 * @method static App\Transcendent\Support\Route\Name getRouteName(string $firstPath, string $secondPath)
 */

class RouteName extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'RouteName';
    }
}