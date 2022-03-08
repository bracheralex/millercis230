@extends ('characters.layout')
@section ('content')
<h3>Show Character Detail</h3>

<p>
    {{$character->name}} 
    {{$character->birthday}} 
     {{$character->occupation}}
      {{$character->image}}
       {{$character->status}}
</p>

<p>
<a href= "{{ route('characters.index') }}">All Characters</a>    
</p>

@endsection