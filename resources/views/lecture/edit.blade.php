@extends('app')

@section('content')


    {!! form($form) !!}

@if(Auth::user()->can('delete_topic'))
    {!! form($deleteForm) !!}
@endif
@endsection

@section('scripts')
<script type="text/javascript">
  $(function() {CKEDITOR.replace( 'description' );})
  $('input#name').change(function(event) {
    $('input#permalink').val($(this).val().toLowerCase()
        .replace(/^\s+|\s+$|[^\w\s]/g,'').replace(/\s+/g, '-'));
  });
</script>
@endsection
