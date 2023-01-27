@extends('layouts.app')
@section('title-page', 'Movies')
@section('main-content')
<h1>Tutti i film</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">original_title</th>
            <th scope="col">nationality</th>
            <th scope="col">date</th>
            <th scope="col">vote</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $elem )
        <tr>
            <td>{{$elem->id}}</td>
            <td>{{$elem->title}}</td>
            <td>{{$elem->original_title}}</td>
            <td>{{$elem->nationality}}</td>
            <td>{{$elem->date}}</td>
            <td>{{$elem->vote}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
