<?php 

namespace App\Services\Support\Validation;

class RouteNameValidation {
    /**
     * All Route Name 
     * 
     * @var array
     */
    private static $allRouteName = [];

    /**
     * First Path 
     * 
     * @var string
     */
    private static $firstPath = 'HOME';

    /**
     * Second Path
     * 
     * @var string
     */
    private static $secondPath = 'INDEX';

    /**
     * Define Which Validation Will Be Continued Or Not
     * 
     * @var string
     */
    private const KEEP_MOVING = 'Go Through Next Validation';

    /**
     * Init All Data Needed
     * 
     * @param array
     * @return void 
     */
    private static function initValue(array $data): void 
    {
        // Fill All Route Name Data 
        self::$allRouteName = $data['allRouteName'];
        self::$firstPath = strtoupper($data['firstPath']);
        self::$secondPath = strtoupper($data['secondPath']);
    }

    public static function validate(array $data)
    {
        // Init All Data Needed
        self::initValue($data);
        // First Validation
        $firstValidationPassed = self::checkBothOfThemIsEmpty();
        if ($firstValidationPassed !== self::KEEP_MOVING) return $firstValidationPassed;
        // Route Name Will Be Given
        return self::matchingRouteName();
    }

    /**
     * Check if both of them ( first path and second path ) are empty
     * 
     * @return string
     */
    public static function checkBothOfThemIsEmpty()
    {
        // If Route Name Default Is Empty
        if (empty(self::$firstPath) && empty(self::$secondPath)) return self::$allRouteName['HOME']['INDEX'];
        return self::KEEP_MOVING;
    }

    /**
     * Mathing Route Name after empty validation passed
     * 
     * @return string
     */
    public static function matchingRouteName()
    {
        // For First Path 
        $firstPath = (isset(self::$allRouteName[self::$firstPath])) ? self::$firstPath : 'HOME';   
        // For Second Path
        $secondPath = (isset(self::$allRouteName[$firstPath][self::$secondPath])) ? self::$secondPath : 'INDEX';
        // Return Fully Path Of Route Name String
        return self::$allRouteName[$firstPath][$secondPath];
    }
}