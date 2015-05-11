@extends('app')

@section('title')
{{ $course->name }}
@endsection

@section('content')

<!-- ==== COURSES START == -->

<div class="col-sm-8 main">
  <h1>{{ $course->name }}</h1>
  <div>{!! $course->description !!}</div>
  <hr>
  <h3>Instructors</h3>
  @foreach($course->instructors()->get() as $instructor)
  <div class="teacher row">
    <div class="col-sm-12">
      <img src="{{ asset('/image/thumb-teacher.jpg') }}" alt="" class="pull-left">
      <h5>{{ $instructor->full_name }}</h5>
      <p>{{ $instructor->educational_degree }}</p>
    </div>
  </div>
  <div>
    {!! $instructor->excerpt !!}
    <br>
  <a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
  <hr>
  @endforeach
</div>
</div>


<!-- ==== COURSES END == -->

<!-- ==== SIDEBAR START == -->

<div class="col-sm-4 side">

  <!-- ==== COURSE DATA START == -->
  <div class="widget" data-scroll-reveal="" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s, opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
    <ul>
      <li class="course-data">
        @if($course->courseImage != null)
        <a href="{{ route('course.show', $course->permalink) }}"><img src="{{ $course->courseImage->URI }}" alt="" class="img-responsive"></a>
        @else
        <a href="{{ route('course.show', $course->permalink) }}"><img src="{{asset('/image/course01.jpg')}}" alt="" class="img-responsive"></a>
        @endif
      </li>
      <li class="course-data">
        <span class="icon icon-032"></span>
        <span class="pull-right">{{ $course->categories()->get()->implode('name', ', ') }}</span>
      </li>
      <li class="course-data">
        <span class="icon icon-038"></span>
        <span class="pull-right">{{ $course->topics()->count().' Topics' }}</span>
      </li>
      <li class="course-data">
        <span class="icon icon-006"></span>
        <span class="pull-right">{{ $course->students()->count().' Students' }}</span>
      </li>
    </ul>
    <p><a class="btn btn-primary take-course" href="#">Enroll in This Course</a></p>
    <p class="text-center share">
      <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
      <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
      <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
    </p>
  </div>
  <!-- ==== COURSE DATA END == -->


</div>

<!-- ==== SIDEBAR END == -->
@endsection
