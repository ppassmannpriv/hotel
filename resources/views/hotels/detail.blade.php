
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

                </section>
            @endforeach
    </div>

@endsection