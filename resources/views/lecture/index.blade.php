@extends('app')

@section('title')
All Courses
@endsection

@section('content')

<div class="col-sm-8">
  <div class="resources">
    @foreach($resources as $resource)
      @include('resources.video', compact('resource')) <!-- TODO -->
    @endforeach
    {!! $resources->render() !!}
  </div>
</div>

</div>

@endsection
