<?php

namespace Picqer\Carriers\SendCloud;

use Picqer\Carriers\SendCloud\Model\Json;

/**
 * @property integer $id
 * @property string $message
 */
class ParcelStatus extends Model
{
    use Query\Findable;
    use Json;

    protected $fillable = [
        'id',
        'message'
    ];

    protected $url = 'parcels/statuses';

    protected $namespaces = [
        'singular' => 'parcel_status',
        'plural' => 'parcel_statuses'
    ];

}
