@extends('layout')
@foreach( $compans as $comp)

@section('title' ,'Details For : ' . $comp->name)

@section('content')

<div class="row">
    <div class="col-12">
    <h1>Details For {{ $comp->name }} </h1><br>
                {{--        for edit --}}
        <a href="/company/{{ $comp->id }}/edit"><button class="btn btn-warning">Edit</button></a>
                {{--        for delete--}}
        <form action="/company/{{ $comp->id }}" method="POST">
        @method('DELETE')
        @csrf
            <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
    </div>
</div>



<div class="row">
    <div class="col-2">
        <p><strong>Name</strong>  {{$comp->name}}</p>
@endforeach
    </div>
</div>

@endsection
