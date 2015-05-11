@extends('app')

@section('title')
All Courses
@endsection

@section('content')

<div class="col-sm-8">
  <div class="courses">
    @foreach($courses as $course)
      @include('course.list')
    @endforeach
    {!! $courses->render() !!}
  </div>
</div>


    <!-- ==== SIDEBAR START == -->

    <div class="col-sm-4">

      <!-- ==== FILTER START == -->
      <div class="widget" data-scroll-reveal="" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s, opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
        <form role="form" method="get">
          <h3>Category Filter</h3>
          <ul>
            @foreach($categories as $category)
            <li class="checkbox">
              <label><input type="checkbox" name="category" value="{{ $category->name }}"> {{ $category->name }} <span class="pull-right">{{ $category->count }}</span></label>
            </li>
            @endforeach

          </ul>
          <input type="hidden" name="page" value="{{ $courses->currentPage() }}">
          <button type="submit" class="btn btn-primary">Apply Filters</button>
        </form>
      </div>
      <!-- ==== FILTER END == -->
    </div>

    <!-- ==== SIDEBAR END == -->
  </div>

</div>

@endsection
