<!-- Course Start -->
<div class="course row" data-scroll-reveal="" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s, opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
  <div class="col-sm-4">
    @if($course->courseImage != null)
    <a href="{{ route('course.show', $course->permalink) }}"><img src="{{ $course->courseImage->URI }}" alt="" class="img-responsive"></a>
    @else
    <a href="{{ route('course.show', $course->permalink) }}"><img src="{{asset('/image/course01.jpg')}}" alt="" class="img-responsive"></a>
    @endif
  </div>
  <div class="col-sm-8">
    <div class="row">
      <div class="col-md-9 col-sm-8">
        <h3><a href="{{ route('course.show', $course->permalink) }}">{{ $course->name }}</a></h3>
        <div class="meta">
          <span><i class="fa fa-user"></i><a href="#">{{ $course->instructors()->get()->implode('full_name', ', ') }}</a></span>
          <span><i class="fa fa-folder"></i><a href="#">{{ $course->categories()->get()->implode('name', ', ') }}</a></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p>
          {!! $course->excerpt !!}
        <a href="{{ route('course.show', $course->permalink) }}">Read more <i class="fa fa-angle-right"></i></a>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <hr>
  </div>
</div>
<!-- Course End -->
