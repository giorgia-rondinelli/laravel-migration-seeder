@extends('layout.main')

@section('content')

<h1 class="text-center">Lista treni:</h1>
<div class="container">

    <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Departure station</th>
        <th scope="col">arrival station</th>
        <th scope="col">Depature time</th>
        <th scope="col">Arrival time</th>
        <th scope="col">Code</th>
        <th scope="col">On time  </th>
        <th scope="col">Delated </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train )
      <tr>
        <th scope="row">{{$train->id}}</th>
        <td>{{$train->departure_station}}</td>
        <td>{{$train->arrival_station}}</td>
        <td>{{$train->departure_time}}</td>
        <td>{{$train->arrival_time}}</td>
        <td>{{$train->code}}</td>
        @if ($train->on_time)
            <td>yes</td>
        @else
            <td>no</td>
        @endif

        @if ($train->deleted)
            <td>yes</td>
        @else
            <td>no</td>
        @endif


      </tr>
        @endforeach
    </tbody>
  </table>
  {{$trains->links()}}
</div>



@endsection
