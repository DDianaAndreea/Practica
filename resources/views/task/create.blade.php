{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Create task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Create task</h2>
  <form class="form-horizontal" action="{{url('tasks')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" >Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Description:</label>
      <div class="col-sm-10">          
        <input type="description" class="form-control" id="description" placeholder="Enter description" name="description">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" >Status:</label>
        <div class="col-sm-10">          
          <input type="status" class="form-control" id="status" placeholder="Enter status" name="status">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >User:</label>
        <div class="col-sm-10">          
          <input type="user_id" class="form-control" id="user_id" placeholder="Enter user id" name="user_id">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" >Assign:</label>
        <div class="col-sm-10">          
          <input type="assign" class="form-control" id="assign" placeholder="Enter assign" name="assign">
        </div>
      </div>
   
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" >Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html> --}}

@extends('layouts.base')

@section('content')
  <h2>Create task</h2>
  {!! Form::open(['action' => 'TaskController@store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Enter name'])}}
  </div>
  <div class="form-group">
    {{Form::label('description','Description')}}
    {{Form::textarea('description','',['class'=>'form-control', 'placeholder'=>'Enter description'])}}
  </div>
  <div class="form-group">
    {{Form::label('status','Status')}}
    {{Form::text('status','',['class'=>'form-control', 'placeholder'=>'Enter status'])}}
  </div>
  <div class="form-group">
    {{Form::label('user','User')}}
    {{Form::text('user','',['class'=>'form-control', 'placeholder'=>'Enter user'])}}
  </div>
  <div class="form-group">
    {{Form::label('assign','Assign')}}
    {{Form::text('assign','',['class'=>'form-control', 'placeholder'=>'Assign'])}}
  </div>
  {{Form::submit('Submit',['class'=>'btn btn-success'])}}
{!! Form::close() !!}

@endsection