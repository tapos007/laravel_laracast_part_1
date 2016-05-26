@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>Update Note</h1>

            <form method="POST" action="/notes/{{$note->id}}">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <textarea class="form-control" name="description" rows="3">{{$note->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Note</button>
            </form>
        </div>
    </div>

@stop