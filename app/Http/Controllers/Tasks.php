<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class Tasks extends Controller

{
    //create a method to Tasks

    public function create(Request $request)
    {
    	//update the create function, using the data from the request
    	$data = $request->only(["task", "priority", "complete"]);

    	//creates article with data and stores this in the database
    	$task = Task::create($data);

    	return response($task, 201);
    }
}
