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
        <tr>
            <th scope="row">1</th>
            @foreach ($videgames as $videogame)
                <td>
                    {{ $videogame->id }}
                </td>
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
                    <a href="#" class="btn btn-primary">
                        Vedi
                    </a>
                </td>
            @endforeach
        </tr>
    </tbody>
</table>

@endsection
