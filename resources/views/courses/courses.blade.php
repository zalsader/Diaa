@extends('app')

@section('content')

    <ul class="list-unstyled video-list-thumbs row">
    @foreach($courses as $course)

                <div class="row">
                <div class="newsBox">
                    <div class="thumbnail">
                        <figure><img src='{{$course->image}}'></figure>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><h5>{{$course->title}}</h5></p>
                                    <p>{{$course->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>







    @endforeach

    </ul>

@endsection