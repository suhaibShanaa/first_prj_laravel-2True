@extends('layout')


@section('content')

    <div class="row">
        <div class="col-12">

            <h1>Companies </h1>
            <!-- for Add data from DB-->
            <a href={{URL::to("company/create")}} ><button class="btn btn-success "> Create</button></a>

        </div>
    </div>
    <br>
    <table class="table">

        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Company Name</th>
        </tr>
        </thead>

        <tbody>
        @foreach($companies as $comp)
            <tr>
                <th scope="row">{{$comp->id}}</th>

                <td><a href="/company/{{$comp->id}}">  {{$comp->name}} </a></td>
                <td>
                    @foreach($comp->Customer()->get() as $customer )
                       <ul>
                           <li>{{$customer->name}}</li>
                       </ul>
                    @endforeach
                </td>

            </tr>
        @endforeach

        </tbody>


    </table>


@endsection

