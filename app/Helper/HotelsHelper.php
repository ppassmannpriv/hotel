<?php

namespace App\Helper;

use App\Base\Config;
use Illuminate\Database\Schema\Builder;

class HotelsHelper
{
    protected $builder;

    protected $publicAttributes = [
        'name' => 'Name',
        'description' => 'Description',
        'street' => 'Street',
        'postcode' => 'Postcode',
        'city' => 'City',
        'country' => 'Country',
        'hours' => 'Hours'
    ];

    public function __construct(
        Builder $builder
    )
    {
        $this->builder = $builder;
    }

    public function getPublicAttributes()
    {
        return $this->publicAttributes;
    }

    public function getFieldType($field)
    {
        return $this->builder->getColumnType('hotels', $field);
    }
}
