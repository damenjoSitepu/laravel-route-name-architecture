<?php 

namespace App\Transcendent\Support\Route\Name\Modules;

/**
 * Documentation
 * 
 * @method getRouteName()
 */

class Profile {
    /**
     * Route name in profile module 
     * 
     * @var array<string>
     */
    private const NAME = [
        'PROFILE'  => [
            'INDEX' => 'application.profile.view.index', 
            'SECURITY' => 'application.profile.view.security',
            'LOAN' => 'application.profile.view.loan'
        ]
    ];

    /**
     * Get route name from profile modules
     * 
     * @return array<string>
     */
    public function getRouteName()
    {
        return Profile::NAME;
    }
}