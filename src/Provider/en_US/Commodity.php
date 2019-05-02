<?php

namespace FakerCommodities\Provider\en_US;

class Commodity extends \Faker\Provider\Base
{
    protected static $commodities = [
        'Corn', 
        'Mini-Corn',
        'Soybeans', 
        'Soybean Oil',
        'Mini Soybeans',
        'Sorghum', 
        'Durum Wheat', 
        'Hard Red Winter Wheat', 
        'Spring Wheat', 
        'Soft Red Winter Wheat', 
        'White Wheat', 
        'Barley', 
        'Millet', 
        'Oats',
        'Rough Rice',
        'Canola',
        'Cotton',
        'Palm Oil',
        'Cocoa',
        'Coffee',
        'Sugar',
        'Lumber',
        'Rubber',
        'Wool'
    ];

    /**
     * A random commodity
     * @return string
     */
    public function commodityName()
    {
        return static::randomElement(static::$commodities);
    }
}
