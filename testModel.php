<?php

//use Models\Task as Task;

//load composer autoload
require __DIR__.'/vendor/autoload.php';

//boot database
require __DIR__.'/database.php';

//create new task
Task::create([
	'title' => 'Task 1',
	'body' => 'Lorem ipsum'
]);

//get all the records from the table
dd(Task::all()->toArray());