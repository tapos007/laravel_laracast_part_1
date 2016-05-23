@extends('layout')
@section('content')
    <h1>People list </h1>
    <ul>
        @foreach($people as $aPeople)
            <li>{{$aPeople}}</li>
        @endforeach
    </ul>
@stop