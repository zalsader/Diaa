@extends('app')

@section('title')
{{ $course->name }}
@endsection

@section('content')

<!-- ==== COURSES START == -->

<div class="col-sm-8">
  <h1>{{ $course->name }}</h1>
  <div>{{ $course->description }}</div>
  <hr>
  <h3>Instructors</h3>

  <div class="teacher row">
    <div class="col-sm-12">
      <img src="/Smartway - HTML Templatecourse_files/thumb-teacher.jpg" alt="" class="pull-left">
      <h5>John Doe</h5>
      <p>Web Design</p>
    </div>
  </div>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra nunc, non scelerisque ligula. Cras vel justo nulla. Vestibulum a sollicitudin metus, faucibus fermentum leo. Nulla ut purus vel nunc ultricies dignissim at at nunc. Vivamus tempor eget lorem non commodo. Vivamus mattis massa in ipsum molestie, eu aliquet lectus pulvinar.<br>
  <a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
  <hr>

</div>

<!-- ==== COURSES END == -->

<!-- ==== SIDEBAR START == -->

<div class="col-sm-4">

  <!-- ==== COURSE DATA START == -->
  <div class="widget" data-scroll-reveal="" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s, opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
    <ul>
      <li class="course-data">
        @if($course->courseImage != null)
        <a href="{{ route('course.show', $course->permalink) }}"><img src="{{ $course->courseImage->URI }}" alt="" class="img-responsive"></a>
        @else
        <a href="{{ route('course.show', $course->permalink) }}"><img src="/Smartway - HTML Template_files/course01.jpg" alt="" class="img-responsive"></a>
        @endif
      </li>
      <li class="course-data">
        <span class="icon icon-032"></span>
        <span class="pull-right">{{ $course->categories()->get()->implode('name', ', ') }}</span>
      </li>
      <li class="course-data">
        <span class="icon icon-038"></span>
        <span class="pull-right">{{ $course->topics()->count() }}</span>
      </li>
      <li class="course-data">
        <span class="icon icon-006"></span>
        <span class="pull-right">{{ /*$course->students()->count()*/"" }}</span>
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
