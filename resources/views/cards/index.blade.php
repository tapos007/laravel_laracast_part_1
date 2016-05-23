@extends('layout')
@section('content')
    <h1>All cards here </h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cards as $card)
        <tr>
            <td><a href="/cards/{{$card->id}}">{{$card->id}}</a></td>
            <td>{{$card->title}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
@stop