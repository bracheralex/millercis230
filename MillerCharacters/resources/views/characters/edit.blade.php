@extends('characters.layout')

@section('content')



<div class="column col-3">
<h3> Edit a character</h3>
@if ($errors->any())
<div class ="toast toast-error">
    @foreach ($error->all() as $error)
    <span> {{$error}} </span> <br/>
  @endforeach
</div>
@endif
<form method="POST" action="{{route('characters.update', $character->id)}}">
@csrf
@method('PUT')
<div class="form-group">
@include('characters.form')

</div>

<div class="form-group">
    <button type="submit" class ="btn btn-primary"> Update Character </button>
    <a href ="{{route('characters.index')}}">Cancel</a>
</div>
</form>
</div>

@endsection