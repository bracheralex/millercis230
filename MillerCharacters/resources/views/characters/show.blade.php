@extends ('characters.layout')
@section ('content')
<h3>Show Character Detail</h3>




<table class="table table-striped table-hover">

 <thead>
    <tr>
      <th>Name</th>
      <th>Birthday</th>
      <th>Occupation</th>
      <th>Image</th>
      <th>Status</th>
            <th></th>
    </tr>
  </thead>
  <tbody>
   
    <tr>
      <td>{{$character->name}}</td>
      <td>{{$character->birthday}}</td>
      <td>{{$character->occupation}}</td>
      <td>
      <img src="{{ $character->img }}" width="100" height="100" alt=""/>    
      </td>  
      <td>{{$character->status}}</td>
   
    </tr>
  </tbody>
</table>

<p>
<a href= "{{ route('characters.index') }}">All Characters</a>    
</p>

@endsection