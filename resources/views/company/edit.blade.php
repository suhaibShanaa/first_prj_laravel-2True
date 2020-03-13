@extends('layout')

    @section('title' ,'Edit Detail For' . $company->name)

@section('content')

    <div class="row">
        <h1>Edit Details For {{ $company->name }} </h1>
    </div>



    <div class="row">
        <div class="col-12">
            <form action={{ URL::to('company/'.$company->id) }} method="POST">

                @method('PUT')
                @include('company.form')


                <button type="submit" class="btn btn-success" > Edit Companies</button>
            </form>
        </div>
    </div>

@endsection
