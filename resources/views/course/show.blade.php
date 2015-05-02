@extends('app')

@section('content')

    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    <h3>{{$course->starts_on}}</h3>
    <h3>{{$course->ends_on}}</h3>
    <h3>{{$course->permalink}}</h3>
    <a href="{{route('topic.create','course_id='.$course->id)}}">add topic</a>
@endsection