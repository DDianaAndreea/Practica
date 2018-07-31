@extends('layouts.base')

@section('content') 
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tasks Table</h3>
    
                  <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Status</th>
                      <th>User</th>
                      <th>Assign</th>
                      <th>Action</th>

                    </tr>

                    @if(count($tasks)>0)

                    @foreach($tasks as $task)
                      <tr>
                        <td>{{$task->id}}</td>
                        <td><a href="/task/{{$task->id}}">{{$task->name}}</a></td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->status}}</td>
                        <td>{{$task->user_id}}</td>
                        <td>{{$task->assign}}</td>         
                        <td><a class="btn btn-default" href="/tasks/{{$task->id}}/edit" >Edit</a>
                    
                          {!! Form::open(['action'=>['TaskController@destroy',$task->id],'method'=>'POST' ]) !!}
                          {!! Form::hidden('_method','DELETE') !!}
                          {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                          {!! Form::close() !!}
                        </td>
                      
                        
                      </tr>
                    @endforeach
                    
                    @endif
                      
                  </table>

                  
                </div>
                <!-- /.box-body -->
                
              </div>
              <!-- /.box -->
            <a class="btn btn-warning" href="../task/create" >Add task</a>
               
               
              
             

              
            </div>
            
        
@endsection 