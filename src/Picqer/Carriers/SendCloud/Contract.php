<?php

namespace Picqer\Carriers\SendCloud;

use Picqer\Carriers\SendCloud\Model\Json;

/**
 * Class Contract
 *
 * @property integer id
 * @property string client_id
 * @property boolean is_active
 * @property array carrier
 * @property string name
 * @property string country
 * @property boolean is_default
 *
 * @package Picqer\Carriers\SendCloud
 */
class Contract extends Model
{
    use Query\Findable;
    use Json;

    protected $fillable = [
        'id',
        'client_id',
        'is_active',
        'carrier',
        'name',
        'country',
        'is_default',
    ];

    protected $url = 'contracts';

    protected $namespaces = [
        'singular' => 'contract',
        'plural' => 'contracts'
    ];

}
