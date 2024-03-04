@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="text-center">
    Videogames
</h1>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TITOLO</th>
            <th scope="col">PREZZO</th>
            <th scope="col">TIPO</th>
            <th scope="col">AZIONI</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($videogames as $videogame)
        <tr>
                <th scope="row">
                    {{ $videogame->id }}
                </th>
                <td>
                    {{ $videogame->title }}
                </td>
                <td>
                    {{ $videogame->price }}
                </td>
                <td>
                    {{ $videogame->type }}
                </td>
                <td>
                    <a href="{{ route('videogames.show', ['videogame' => $videogame->id]) }}" class="btn btn-primary">
                        Vedi
                    </a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection
