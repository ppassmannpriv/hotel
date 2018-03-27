<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use App\Base\Config;
use App\Room;

class Hotel extends Model
{
    public function getAddressAsHtml()
    {
        $address = "<address>";
        $address .= $this->street."<br />";
        $address .= $this->postcode." ".$this->city."<br />";
        $address .= $this->country;
        $address .= "</address>";

        return new HtmlString($address);
    }

    public function getDetailLink()
    {
        $config = new Config;
        $base = $config->getFrontendConfig();
        return $base['baseUrl'].'hotels/view/'.$this->id;
    }

    public function getRooms()
    {
        $rooms = Room::where('hotel', $this->id)->get();

        return $rooms;
    }
}
