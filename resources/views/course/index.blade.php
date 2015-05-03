@extends('app')

@section('content')


    @foreach($courses as $course)


            <h1>
                <a href="course/{{$course->permalink}}">{{$course->name}}</a></h1>
            <p>{{$course->description}}</p>
            </hr>





    @endforeach



@endsection