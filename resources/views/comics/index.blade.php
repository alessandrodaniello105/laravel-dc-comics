@extends('layouts.main')

@section('content')

<div class="container my-3">
    <h1>Fumetti venduti</h1>


    <table class="table">
        <thead>

          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo di vendita</th>
            <th scope="col">Data di vendita</th>
          </tr>

        </thead>

        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            @endforeach


        </tbody>

      </table>


</div>
@endsection
