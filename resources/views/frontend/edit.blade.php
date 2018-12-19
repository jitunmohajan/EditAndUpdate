@extends('backend.layout')
@section('content')
      <div class="card-body">


            <form id="signup-form" class="signup-form" method="post" action="{{ URL::to('savepost') }}">
                {{csrf_field()}}
                 <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Title</label>
                    <input type="text" value="{{ $data->title }}" class="form-control" name="title" placeholder="Title">
                  </div>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea name="description" class="form-control" rows="5">{{ $data->description }}</textarea>
                </div>
                          
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
            </div>

@stop
