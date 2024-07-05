<?php

namespace Picqer\Carriers\SendCloud;

use Picqer\Carriers\SendCloud\Model\Json;

/**
 * Class Parcel
 *
 * @property integer $id
 * @property string $shop_name
 * @property string|null $shop_url
 * @property string $system
 * @property string|null $failing_since
 * @property string|null $last_fetch
 * @property string $last_updated_at
 * @property bool $service_point_enabled
 * @property array $service_point_carriers
 * @property bool $webhook_active
 * @property string|null $webhook_url
 *
 * @package Picqer\Carriers\SendCloud
 */
class Integration extends Model
{
    use Query\FindAll;
    use Query\FindWithoutNamespace;
    use Persistance\Storable;
    use Persistance\Multiple;
    use Json;

    protected $fillable = [
        'id',
        'shop_name',
        'shop_url',
        'system',
        'failing_since',
        'last_fetch',
        'last_updated_at',
        'service_point_enabled',
        'service_point_carriers',
        'webhook_active',
        'webhook_url'
    ];

    protected $url = 'integrations';

    protected $namespaces = [
        'singular' => 'integration',
        'plural' => 'integrations'
    ];
}
