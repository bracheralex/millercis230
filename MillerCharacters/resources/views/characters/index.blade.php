@extends ('characters.layout')
@section('content')

<h3> Characters </h3>

<table class="table table-striped table-hover">

 <thead>
    <tr>
      <th>Name</th>
      <th>Birthday</th>
      <th>Occupation</th>
       
        <th>Status</th>
            <th></th>

    </tr>
  </thead>
  <tbody>
      @foreach($characters as $character) 
    <tr>
      <td>{{$character->name}}</td>
      <td>{{$character->birthday}}</td>
      <td>{{$character->occupation}}</td>
          <td>{{$character->status}}</td>
           <td><a href="{{ route('characters.show', $character->id) }}">Show Detail</a></td>
    </tr>
  </tbody>
@endforeach
</table>
@endsection
