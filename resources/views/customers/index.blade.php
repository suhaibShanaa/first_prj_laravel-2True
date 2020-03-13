@extends('layout')


@section('content')

    <div class="row">
        <div class="col-12">

            <h1>Customers </h1>
            <!-- for Add data from DB-->
            <a href={{URL::to("customers/create")}} ><button class="btn btn-success ">Create</button></a>
        </div>
    </div>
    <br>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Company Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>

        <tbody>
        @foreach($customers as $cust)
            <tr>
                <th scope="row">{{$cust->id}}</th>

                <td>
                                    <a href="/customers/{{$cust->id}}">  {{$cust->name}} </a>
                                    <td>
                                        @foreach($cust->Company()->get() as $company )
                                            {{$company->name}}
                                        @endforeach
                                    </td>


                <td>{{ $cust->email }} </td>
        </tr>
        @endforeach
        </tbody>


    </table>


@endsection

