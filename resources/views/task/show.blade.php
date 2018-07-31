@extends('layouts.base')

@section('content') 

<h1>{{$task->title}}</h1>
<div>
  {{$task->description}}
</div>
<div>
  {{$task->status}}
</div>
<hr>
<small>User id {{$task->user_id}}</small>
<small>Assign {{$task->assign}}</small>


@endsection 