<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $publicAttributes = [
        'wifi',
        'smoking',
        'guests',
        'singleBeds',
        'twinBeds',
        'tv',
        'minibar',
        'shower',
        'bathtub',
        'bathrooms',
        'breakfast',
        'conciergeServices'
    ];

    public function getAttributes()
    {
        $attributeList = [];
        foreach($this->publicAttributes as $attribute)
        {
            $attributeList[$attribute] = $this->$attribute;
        }

        return $attributeList;
    }
}
