@extends('characters.layout')

@section('content')



<div class="column col-3">
<h3> Make a character</h3>
@if ($errors->any())
<div class ="toast toast-error">
    @foreach ($errors->all() as $error)
    <span> {{$error}} </span> <br />
  @endforeach
</div>
@endif
<form method="POST" action="{{route('characters.store')}}">
@csrf
<div class="form-group">
@include('characters.form')

</div>

<div class="form-group">
    <button type="submit" class ="btn btn-primary"> Store Character </button>
    <a href ="{{route('characters.index')}}">Cancel</a>
</div>
</form>
</div>

@endsection