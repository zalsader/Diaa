@extends('app')

@section('content')

    <h1>{{$course->name}}</h1>
    <p>{{$course->description}}</p>
    <h3>{{$course->starts_on}}</h3>
    <h3>{{$course->ends_on}}</h3>
    <h3>{{$course->permalink}}</h3>

    @foreach($course->topics as $topic)


        <h1>
            <a href="{{route('course.topic.show',$topic->course->permalink,$topic->id)}}">{{$topic->title}}</a></h1>
        <p>{{$topic->released_on}}</p>
        </hr>





    @endforeach

    <a href="{{route('course.topic.create',$course->permalink)}}">add topic</a>
@endsection