
@extends('layouts.1col')

@section('content')
    <h2>Much content</h2>
    @foreach($hotels as $hotel)
        <li>
            <a href="{{$hotel->getDetailLink()}}" title="{{$hotel->name}}">{{$hotel->name}}</a>
            <p>{{$hotel->short_description}}</p>
        </li>
    @endforeach
@endsection