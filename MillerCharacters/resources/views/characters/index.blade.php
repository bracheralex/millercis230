@extends ('characters.layout')
@section('content')

<h3> Characters </h3>
<a class="btn btn-primary" href="{{route('characters.create')}}">Create </a>

{{ $characters->links() }}

<table class="table table-striped table-hover">

 <thead>
    <tr>
      <th>Name</th>
      <th>Birthday</th>
      <th>Occupation</th>
       
        <th>Status</th>
            <th></th>
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
            <td><a href="{{ route('characters.edit', $character->id) }}">Edit</a></td>

           <td>
             <form action="{{route('characters.destroy', $character->id)}}" method="POST" onSubmit="return confirm('Are you sure you want to delete?');">
               @csrf
               @method('DELETE')
               <button class ="btn btn-error" type="submit">Delete</button>
             </form>
           </td>
    </tr>
  </tbody>
@endforeach
</table>

{{ $characters->links() }}
@endsection
