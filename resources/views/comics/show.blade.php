@extends('layouts.main')

@section('content')

<div class="container my-3">
    <h1>{{$comic->title}}</h1>
    <h3>Serie: {{$comic->series}}</h3>

    <div class="row">
        <div class="col">
            <img class="img-fluid" src="{{$comic->thumb}}" alt="{{$comic->title}}">


        </div>

        <div class="col">
            <h4>Description:</h4>
            <p>
                {{$comic->description}}
            </p>

            @php
            $time_in_sec = strtotime($comic->sale_date);
            $date_sell_date = getDate($time_in_sec);
            @endphp


            <h4>Sell info:</h4>
            <p>
                Sell at price: {{$comic->price}}, in date  {{$date_sell_date['weekday'] . ' ' . $date_sell_date['mday'] . ', ' . $date_sell_date['month'] . ' ' .$date_sell_date['year']}}
            </p>

            <a href="{{route('comics.index')}}" class="btn btn-secondary">Go back</a>
        </div>
    </div>



</div>
@endsection
