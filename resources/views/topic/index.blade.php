@extends('app')

@section('content')


    @foreach($topics as $topic)


            <h1>
                <a href="{{route('course.topic.show',array($topic->course->permalink,$topic->id))}}">{{$topic->title}}</a></h1>
            <p>{{$topic->released_on}}</p>
            </hr>





    @endforeach



@endsection