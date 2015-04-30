@extends('app')

@section('content')
<h1>Create new Course</h1>
<hr/>


{!! Form::open(['url'=>'courses']) !!}
<div class="form-group">
{!!Form::label('name','Name:')!!}
{!!Form::text('name',null,['class'=>'form-control'] )!!}
</div>
<div class="form-group">
    {!!Form::label('description','Description:')!!}
    {!!Form::textarea('description',null,['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!!Form::label('start_on','Start on:')!!}
    {!!Form::input('date','starts_on',date("Y-m-d"),['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!!Form::label('ends_on','Ends on:')!!}
    {!!Form::input('date','ends_on',date("Y-m-d"),['class'=>'form-control'] ) !!}
</div>
<div class="form-group">
    {!!Form::label('video_resource_id','video:')!!}
    {!!Form::text('video_resource_id',null,['class'=>'form-control'] )!!}
</div>
<div class="form-group">

    {!!Form::submit('Create Course',['class'=>'btn btn-primary form-control'] ) !!}
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