<?php

namespace Picqer\Carriers\SendCloud;

use Picqer\Carriers\SendCloud\Model\Json;

/**
 * Class ShippingMethod
 *
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property array $options
 * @property array $countries
 *
 * @package Picqer\Carriers\SendCloud
 */
class ShippingMethod extends Model
{
    use Query\Findable;
    use Json;

    protected $fillable = [
        'id',
        'name',
        'carrier',
        'price',
        'min_weight',
        'max_weight',
        'service_point_input',
        'options',
        'countries'
    ];

    protected $url = 'shipping_methods';

    protected $namespaces = [
        'singular' => 'shipping_method',
        'plural' => 'shipping_methods'
    ];

}
