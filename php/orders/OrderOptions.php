<?php
abstract class OrderOptions
{
    const CHICKEN                       = array('calories' => 180, 'price' => 9.40, 'imgName' => 'chicken-order');
    const STEAK                         = array('calories' => 150, 'price' => 11.15, 'imgName' => 'steak-order');
    const BARBACOA                      = array('calories' => 170, 'price' => 11.15, 'imgName' => 'barbacoa-order');
    const CARNITAS                      = array('calories' => 210, 'price' => 10.05, 'imgName' => 'carnitas-order');
    const SOFRITAS                      = array('calories' => 150, 'price' => 9.40, 'imgName' => 'sofritas-order');
    const FAJITA_VEGGIES                = array('calories' => 20, 'price' => 9.40, 'imgName' => 'fajita-veggies');
    const CHEESE                        = array('calories' => 0, 'price' => 9.40, 'imgName' => 'cheese');
    const FRESH_TOMATO_SALSA            = array('calories' => 25, 'price' => 0, 'imgName' => 'tomato-salsa');
    const ROASTED_CHILI_CORN_SALSA      = array('calories' => 80, 'price' => 0, 'imgName' => 'roasted-chili-corn-salsa');
    const TOMATILLO_GREEN_CHILI_SALSA   = array('calories' => 15, 'price' => 0, 'imgName' => 'tomatillo-green-chili-salsa');
    const TOMATILLO_RED_CHILI_SALSA     = array('calories' => 30, 'price' => 0, 'imgName' => 'tomatillo-red-chili-salsa');
    const SOUR_CREAM                    = array('calories' => 110, 'price' => 0, 'imgName' => 'sour-cream');
    const WHITE_RICE                    = array('calories' => 210, 'price' => 0, 'imgName' => 'white-rice-order');
    const BROWN_RICE                    = array('calories' => 210, 'price' => 0, 'imgName' => 'brown-rice-order');
    const BLACK_BEANS                   = array('calories' => 130, 'price' => 0, 'imgName' => 'black-beans-order');
    const PINTO_BEANS                   = array('calories' => 130, 'price' => 0, 'imgName' => 'pinto-beans-order');
    const GUACAMOLE                     = array('calories' => 230, 'price' => 2.65, 'imgName' => 'veggie-order');
    const QUESO_BLANCO                  = array('calories' => 240, 'price' => 2.65, 'imgName' => 'queso-blanco');
    const VEGGIE                        = array('calories' => 0, 'price' => 8.85, 'imgName' => 'veggie-order');
    const ROMAINE_LETTUCE               = array('calories' => 5, 'price' => 0, 'imgName' => 'romaine-lettuce');
    const NO_SELECTION                  = array('calories' => 0, 'price' => 0, 'imgName' => 'no-selection');

    private static $orderOptions = array(
        'CHICKEN'                       => self::CHICKEN,
        'STEAK'                         => self::STEAK,
        'BARBACOA'                      => self::BARBACOA,
        'CARNITAS'                      => self::CARNITAS,
        'SOFRITAS'                      => self::SOFRITAS,
        'FAJITA VEGGIES'                => self::FAJITA_VEGGIES,
        'CHEESE'                        => self::CHEESE,
        'FRESH_TOMATO_SALSA'            => self::FRESH_TOMATO_SALSA,
        'ROASTED_CHILI-CORN_SALSA'      => self::ROASTED_CHILI_CORN_SALSA,
        'TOMATILLO-GREEN_CHILI_SALSA'   => self::TOMATILLO_GREEN_CHILI_SALSA,
        'TOMATILLO-RED_CHILI_SALSA'     => self::TOMATILLO_RED_CHILI_SALSA,
        'SOUR CREAM'                    => self::SOUR_CREAM,
        'WHITE RICE'                    => self::WHITE_RICE,
        'BROWN RICE'                    => self::BROWN_RICE,
        'BLACK BEANS'                   => self::BLACK_BEANS,
        'PINTO BEANS'                   => self::PINTO_BEANS,
        'GUACAMOLE'                     => self::GUACAMOLE,
        'QUESO BLANCO'                  => self::QUESO_BLANCO,
        'VEGGIE'                        => self::VEGGIE,
        'ROMAINE LETTUCE'               => self::ROMAINE_LETTUCE,
        'NO_SELECTION'                  => self::NO_SELECTION
    );

    public static function getOrderOptions(): array
    {
        return self::$orderOptions;
    }

    public static function getOptionPrice($optionName)
    {
        return self::$orderOptions[$optionName]['price'];
    }

    public static function getOptionCalories($optionName)
    {
        return self::$orderOptions[$optionName]['calories'];
    }

    public static function getOptionImgName($optionName)
    {
        return self::$orderOptions[$optionName]['imgName'];
    }
}

// $chicken_calories = MeatType::CHICKEN['calories'];
// $chicken_price = MeatType::CHICKEN['price'];
