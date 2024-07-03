<?php

namespace Picqer\Carriers\SendCloud;

/**
 * Class Parcel
 *
 * @property integer $id
 * @property string $order_id
 * @property string $order_number
 * @property array $order_details
 * @property array $payment_details
 * @property array $customs_details
 * @property array $customer_details
 * @property array $billing_address
 * @property array $shipping_address
 * @property array $shipping_details
 * @property array $service_point_details
 *
 * @package Picqer\Carriers\SendCloud
 */
class Order extends Model
{
    use Query\Findable;
    use Persistance\Storable;
    use Persistance\Multiple;

    protected $fillable = [
        'id',
        'order_id',
        'order_number',
        'order_details',
        'payment_details',
        'customs_details',
        'customer_details',
        'billing_address',
        'shipping_address',
        'shipping_details',
        'service_point_details'
    ];

    protected $url = 'orders';

    protected $namespaces = [
        'singular' => 'order',
        'plural' => 'orders'
    ];
}
