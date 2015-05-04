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
    <!-- Pagination Start -->
    <div class="row" data-scroll-reveal="" style="-webkit-transform: translatey(24px);transform: translatey(24px);opacity: 0;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
      <div class="col-sm-6">
        <a class="btn btn-primary lesson-prev"><i class="fa fa-caret-left"></i> &nbsp; Previous</a>
      </div>
      <div class="col-sm-6 text-right">
        <a class="btn btn-primary lesson-next">Next &nbsp; <i class="fa fa-caret-right"></i></a>
      </div>
    </div>
    <!-- Pagination End -->
    <!-- ==== SIDEBAR START == -->

    <div class="col-sm-4">

      <!-- ==== FILTER START == -->
      <div class="widget" data-scroll-reveal="" style="-webkit-transform: translatey(0);transform: translatey(0);opacity: 1;-webkit-transition: -webkit-transform 0.66s ease-in-out 0s,  opacity 0.66s ease-in-out 0s;transition: transform 0.66s ease-in-out 0s, opacity 0.66s ease-in-out 0s;-webkit-perspective: 1000;-webkit-backface-visibility: hidden;" data-scroll-reveal-initialized="true">
        <form role="form">
          <h3>Category Filter</h3>
          <ul>
            @foreach($categories as $category)
            <li class="checkbox">
              <label><input type="checkbox"> {{ $category->name }} <span class="pull-right">{{ $category->count }}</span></label>
            </li>
            @endforeach
          </ul>
          <button type="submit" class="btn btn-primary">Apply Filters</button>
        </form>
      </div>
      <!-- ==== FILTER END == -->
    </div>

    <!-- ==== SIDEBAR END == -->
  </div>

</div>

@endsection
