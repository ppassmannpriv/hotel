<?php

namespace App\Base;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $baseUrl = 'http://playground.local/';

    public function getFrontendConfig()
    {
        return [
            'baseUrl' => $this->baseUrl
        ];
    }

    public function getNavigation()
    {
        return [
            'Home' => $this->baseUrl,
            'Hotels' => $this->baseUrl.'hotels/',
            'Account' => $this->baseUrl.'account/'
        ];
    }
}
