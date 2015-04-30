@extends('app')

@section('content')
    <h1>Add new Topic</h1>
    <hr/>


    {!! Form::open(['url'=>'add_topic']) !!}
    <div class="form-group">
        {!!Form::label('title','Title:')!!}
        {!!Form::text('title',null,['class'=>'form-control'] )!!}
    </div>
    <div class="form-group">
        {!!Form::label('released_on','Released on:')!!}
        {!!Form::input('date','released_on',date("Y-m-d"),['class'=>'form-control'] ) !!}
    </div>
    <div class="form-group">

        {!!Form::submit('Add Topic',['class'=>'btn btn-primary form-control'] ) !!}
    </div>
    
    {!! Form::close() !!}

    @if($errors->any())
        <ul class="alert alert-danger">

            @foreach($errors->all() as $error)

                <li>{{$error}}</li>
            @endforeach

        </ul>


    @endif
@stop