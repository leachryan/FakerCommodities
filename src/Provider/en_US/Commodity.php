<?php

namespace FakerCommodities\Provider\en_US;

class Commodity extends \Faker\Provider\Base
{
    protected static $commodities = [
        'Corn', 'Soybeans', 'Sorghum', 'Durum Wheat', 'Hard Red Winter Wheat', 'Spring Wheat', 'Soft Red Winter Wheat', 'White Wheat', 'Barley', 'Millet', 'Oats',
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