<?php

namespace App\Http\Controllers;

use App\Task;


use Illuminate\Http\Request;
use DB;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tasks= Task::orderBy('id','asc')->get();
        // $tasks-DB::select('select * from task ');
        $tasks=Task::all();
        return view('task.index')->with('tasks',$tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
            'user_id'=>'required',
            'assign'=>'required',
        ]);

         $task=new Task;
         $task->name=$request->input('name');
         $task->description=$request->input('description');
         $task->status=$request->input('status');
         $task->user_id=$request->input('user_id');
         $task->assign=$request->input('assign');
         $task->save();

         return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task=Task::find($id);
        return view('task.show')->with('task',$task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::find($id);
        return view('task.edit')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
            'user_id'=>'required',
            'assign'=>'required',
        ]);

         $task=Task::find($id);
         $task->name=$request->input('name');
         $task->description=$request->input('description');
         $task->status=$request->input('status');
         $task->user_id=$request->input('user_id');
         $task->assign=$request->input('assign');
         $task->save();

         return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task=Task::ind($id);
        $task->delete();
        return redirect('/tasks');
    }
}
