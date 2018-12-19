@extends('backend.layout')
@section('content')
     <div class="container">
  <h2>All Post</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($data)>0)
        @foreach($data as $d)
          <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->title }}</td>
            <td>{{ $d->description }}</td>
           <td>
              <a href="{{ URL::to('edit',['id'=>$d->id]) }}" class="btn btn-info">Edit</a>
              <a href="{{ URL::to('del',['id'=>$d->id]) }}" class="btn btn-info">Delete</a>
            </td>
           
          </tr>
        @endforeach
      @else

      @endif
     
      
    </tbody>
  </table>
</div>

@stop
