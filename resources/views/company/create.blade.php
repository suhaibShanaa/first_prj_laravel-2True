@extends('layout')

@section('title')
    Add New Companies
@endsection

@section('content')

    <h1>Add New Company </h1>


    <!-- for Add data from DB-->

    <form action={{url('company/create')}} method="POST"  class="pb-5">

    @include('company/form')
        <button type="submit" class="btn btn-primary"> Add Company </button>

    </form>
@endsection
