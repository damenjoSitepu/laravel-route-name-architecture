<?php 

namespace App\Transcendent\Support\Route\Name\Modules;

/**
 * Documentation
 * 
 * @method getRouteName()
 */

class Home {
    /**
     * Route name in home module 
     * 
     * @var array<string>
     */
    private const NAME = [
        'HOME'  => [
            'INDEX' => 'application.home.view.index', 
            'DASHBOARD' => 'application.home.view.dashboard',
            'STATISTIC' => 'application.home.view.statistic'
        ]
    ];

    /**
     * Get route name from home modules
     * 
     * @return array<string>
     */
    public function getRouteName()
    {
        return Home::NAME;
    }
}