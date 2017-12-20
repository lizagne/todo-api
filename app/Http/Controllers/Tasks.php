<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskRequest;

class Tasks extends Controller

{
    //create a method to Tasks

    public function create(TaskRequest $request)
    {
    	//update the create function, using the data from the request
    	$data = $request->only(["task", "priority", "complete"]);

    	//creates article with data and stores this in the database
    	$task = Task::create($data);

    	return response($task, 201);
    }


    public function list() 
    {
    	return Task::all();
    }

    public function read(Task $task) 
    {
    	return $task;
    }

    public function update(TaskRequest $request, Task $task)
    {

    	$data = $request->only(["task"]);
    	$task->fill($data)->save();
    	return $task;
    }

    public function delete(Task $task)
	{
		$task->delete();
		return response(null, 204);
    }



}

