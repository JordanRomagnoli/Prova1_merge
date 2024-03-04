@extends('layouts.app')

@section('page-title', 'Tutti i Videogame')

@section('main-content')

<h1>
    {{ $videogame->title }}
</h1>

<div class="row">
    <div class="col">
        <a href="{{ route(videogames.show) }}">
            Torna ai videogames
        </a>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">descrizione</th>
                <th scope="col">prezzo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $videogame->id }}</th>
                <td>{{ $videogame->title }}</td>
                <td>{{ $videogame->description }}</td>
                <td>{{ $videogame->price }} €</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>

@endsection