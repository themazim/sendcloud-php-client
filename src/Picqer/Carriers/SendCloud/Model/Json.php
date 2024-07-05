<?php

namespace Picqer\Carriers\SendCloud\Model;

trait Json
{
    public function json()
    {
        $json = [
            $this->namespaces['singular'] => $this->attributes
        ];

        return json_encode($json);
    }
}
