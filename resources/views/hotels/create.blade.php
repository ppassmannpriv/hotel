
@extends('layouts.1col')

@section('content')
    <h1>New Hotel</h1>
    <div class="form-group">
        <form method="POST" action="/hotels">
            {{ csrf_field() }}
            @foreach($helper->getPublicAttributes() as $attribute => $name)
                <label for="{{$attribute}}">{{$name}}</label>
                @if($helper->getFieldType($attribute) == 'text')
                    <input type="text" class="form-control" id="{{$attribute}}" name="{{$attribute}}" />
                @endif
            @endforeach
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection