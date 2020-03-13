@extends('layout')

@section('title')
    Add New Customers
@endsection

@section('content')

    <h1>Add New Customers </h1>


    <!-- for Add data from DB-->

    <form action={{url('customers/create')}} method="POST"  class="pb-5">
        @include('customers.form')
        <button type="submit" class="btn btn-primary"> Add Customer </button>
    </form>

@endsection
