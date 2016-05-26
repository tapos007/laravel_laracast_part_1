@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>{{$card->title}}</h1>

            <ul class="list-group">
                @foreach($card->notes as $note)
                    <li class="list-group-item">
                        {{$note->description}}
                        <a href="/notes/{{$note->id}}/edit" class="pull-right">{{$note->user->name}}</a>
                    </li>
                @endforeach
            </ul>
            <hr/>
            <h1>Add a New Note</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="/cards/{{$card->id}}/notes">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Note</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Add Note</button>
            </form>
            {{var_dump($errors)}}
        </div>
    </div>

@stop