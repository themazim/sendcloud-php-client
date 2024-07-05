<?php

namespace Picqer\Carriers\SendCloud\Query;

use Picqer\Carriers\SendCloud\Connection;
use Picqer\Carriers\SendCloud\Model;

/**
 * Trait FindOne
 *
 * @method Connection connection()
 *
 * @package Picqer\Carriers\SendCloud\Persistance
 */
trait FindWithoutNamespace
{

    /**
     * @param $id
     * @return Model|FindOne
     */
    public function find($id)
    {
        $result = $this->connection()->get($this->url . '/' . urlencode($id));

        return new self($this->connection(), $result);
    }

}
