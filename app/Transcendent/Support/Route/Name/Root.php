<?php 

namespace App\Transcendent\Support\Route\Name;

// Contracts / Interface
use App\Transcendent\Contracts\RouteRootName;
// Route Name Modules
use App\Transcendent\Support\Route\Name\Modules\Home;
use App\Transcendent\Support\Route\Name\Modules\Profile;
// Services
use App\Services\Support\Validation\RouteNameValidation;

/**
 * Documentation
 * 
 * @method static getRouteName(string $firstPath, string $secondPath)
 */

class Root implements RouteRootName {
    /**
     * All Route Name Will Be Defined Here
     * 
     * @var array<string,mixed>
     */
    private static $allRouteName = [];

    /**
     * Initialize all route name from every module inside modules 
     */
    public function __construct(
        /**
         * Every Route Name In Certain Module
         */
        private Home $home,
        private Profile $profile,
    )
    {
        // Merge All Route Name
        $mergeAllRouteName = array_merge(
            $home->getRouteName(), 
            $profile->getRouteName()
        );
        // Initialization Start
        self::$allRouteName = $mergeAllRouteName;
    }

    /**
     * Get Route Name
     * 
     * @return string
     */
    public static function getRouteName(string $firstPath = '', string $secondPath = ''): string
    {
        // Validate Starts 
        return RouteNameValidation::validate([
            'allRouteName'  => self::$allRouteName,
            'firstPath'     => $firstPath,
            'secondPath'    => $secondPath
        ]);
    }
}