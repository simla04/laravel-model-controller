@extends('layouts.app')
@section('title-page', 'Movies')
@section('main-content')
<h1 class="text-warning bg-dark p-4">Tutti i film</h1>
<table class="table table-dark table-striped p-5">
    <thead>
        <tr>
            <th class="text-uppercase text-danger p-4" scope="col">#id</th>
            <th class="text-uppercase text-danger p-4" scope="col">title</th>
            <th class="text-uppercase text-danger p-4" scope="col">original_title</th>
            <th class="text-uppercase text-danger p-4" scope="col">nationality</th>
            <th class="text-uppercase text-danger p-4" scope="col">date</th>
            <th class="text-uppercase text-danger p-4" scope="col">vote</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $elem )
        <tr>
            <td >{{$elem->id}}</td>
            <td >{{$elem->title}}</td>
            <td >{{$elem->original_title}}</td>
            <td >{{$elem->nationality}}</td>
            <td>{{$elem->date}}</td>
            <td >{{$elem->vote}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
