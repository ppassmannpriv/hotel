@extends('layouts.1col')

@section('content')
    <h2>Much content</h2>
    <p></p><a href="/hotels/create" title="Add a hotel">Add a hotel</a></p>
    @foreach($hotels as $hotel)
        <li>
            <a href="{{$hotel->getDetailLink()}}" title="{{$hotel->name}}">{{$hotel->name}}</a>
            <p>{{$hotel->short_description}}</p>
        </li>
    @endforeach
@endsection