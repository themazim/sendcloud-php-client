<?php

namespace Picqer\Carriers\SendCloud\Model;

trait JsonSingle
{
    public function json()
    {
        return json_encode($this->attributes);
    }
}
