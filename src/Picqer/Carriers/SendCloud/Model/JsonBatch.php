<?php

namespace Picqer\Carriers\SendCloud\Model;

trait JsonBatch
{
    public function json()
    {
        $json = [
            $this->attributes
        ];

        return json_encode($json);
    }
}
