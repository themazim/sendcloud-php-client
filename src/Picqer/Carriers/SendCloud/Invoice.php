<?php

namespace Picqer\Carriers\SendCloud;

use Picqer\Carriers\SendCloud\Model\Json;

/**
 * Class Invoice
 *
 * @property integer $id
 * @property string $description
 * @property float $price_excl
 * @property float $price_incl
 * @property string $date
 * @property boolean $isPayed
 * @property string $items
 *
 * @package Picqer\Carriers\SendCloud
 */
class Invoice extends Model
{
    use Query\FindAll;
    use Json;

    protected $fillable = [
        'id',
        'description',
        'price_excl',
        'price_incl',
        'date',
        'isPayed',
        'items'
    ];

    protected $url = 'invoices';

    protected $namespaces = [
        'singular' => 'invoice',
        'plural' => 'invoices'
    ];

}
