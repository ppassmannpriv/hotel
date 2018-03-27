
@extends('layouts.1col')

@section('content')
    <h2>{{$hotel->name}}</h2>
    <p>{{$hotel->description}}</p>
    {{$hotel->getAddressAsHtml()}}
    <div id="rooms">
            @foreach($hotel->getRooms() as $room)
                <section data-title="{{$room->name}}" data-id="{{$room->id}}">
                    <h3>{{$room->name}}</h3>
                    <p>{{$room->description}}</p>
                    <div class="attributes">
                        <ul class="row">
                            @foreach($room->getAttributes() as $attribute => $value)
                                <li class="col-sm-6 col-md-3">{{$attribute}}: {{$value}}</li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            @endforeach
    </div>

@endsection