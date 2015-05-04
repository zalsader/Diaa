@extends('app')

@section('title')
{{ $course->name.' Courseware' }}
@endsection

@section('content')
    <!-- ==== COURSES START == -->

    <div class="col-sm-8">
      <h3>Topics</h3>
      @foreach($topics as $topic)
      <h5 class="lesson-title"><a href="{{ route(course.topic.show, $course->permalink, $topic->id)}}">{{ $topic->title }}</a></h5>
      <div class="meta">
        <span><i class="fa fa-clock-o"></i>{{ 'Released on:'.$topic->released_on  }}</span>
      </div>
      <div>{{ $topic->description }}</div>
      <hr>
      @endforeach
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
            <span class="pull-right">{{ $course->topics()->count().' Topics' }}</span>
          </li>
          <li class="course-data">
            <span class="icon icon-006"></span>
            <span class="pull-right">{{ $course->students()->count().' Students' }}</span>
          </li>
        </ul>
        <p class="text-center share">
          <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
          <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
          <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
        </p>
      </div>
      <!-- ==== COURSE DATA END == -->

    </div>

@endsection
