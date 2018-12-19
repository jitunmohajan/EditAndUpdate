@extends('backend.layout')
@section('content')
      <div class="card-body">
            <form id="signup-form" class="signup-form" method="post" action="{{ URL::to('savepost') }}">
                {{csrf_field()}}
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label >Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title Here">
                  </div>
                  
                </div>
                <div class="form-group">
                  <label for="inputAddress">Description</label>
                  <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                  
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
              </form>
            </div>
@stop
