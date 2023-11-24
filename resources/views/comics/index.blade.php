@extends('layouts.main')

@section('content')

<div class="container my-3">
    <h1>Fumetti venduti</h1>

    @if(Session::has('success'))
    {{-- @php

        deleteMsgTimeout();
    @endphp --}}
    <div id="delete_msg" class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif


    <table class="table">
        <thead>

          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo di vendita</th>
            <th scope="col">Data di vendita</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Azioni</th>
        </tr>

        </thead>

        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{route('comics.show', $comic->slug)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="{{route('comics.edit', $comic)}}" class="btn btn-warning"> <i class="fa-solid fa-pencil"></i> </a>
                    @include('partials.deleteComic')
                </td>
            </tr>
            @endforeach


        </tbody>

      </table>


</div>
@endsection
