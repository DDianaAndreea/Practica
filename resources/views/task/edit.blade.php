
@section('content')
<h2>Create task</h2>
{!! Form::open(['action' => ['TaskController@update', $task->id], 'method'=>'POST']) !!}
<div class="form-group">
  {{Form::label('name','Name')}}
  {{Form::text('title',$task->title,['class'=>'form-control', 'placeholder'=>'Enter name'])}}
</div>
<div class="form-group">
  {{Form::label('description','Description')}}
  {{Form::textarea('description',$task->description,['class'=>'form-control', 'placeholder'=>'Enter description'])}}
</div>
<div class="form-group">
  {{Form::label('status','Status')}}
  {{Form::text('status', $task->status,['class'=>'form-control', 'placeholder'=>'Enter status'])}}
</div>
<div class="form-group">
  {{Form::label('user','User')}}
  {{Form::text('user',$task->user,['class'=>'form-control', 'placeholder'=>'Enter user'])}}
</div>
<div class="form-group">
  {{Form::label('assign','Assign')}}
  {{Form::text('assign',$task->assign,['class'=>'form-control', 'placeholder'=>'Assign'])}}
</div>
{{Form::hidden('_method','PUT')}}
{{Form::submit('Submit',['class'=>'btn btn-success'])}}
{!! Form::close() !!}

@endsection