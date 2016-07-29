<?php
use Illuminate\Database\Capsule\Manager as Capsule;

//load composer autoload
require __DIR__.'/vendor/autoload.php';

//boot database
require __DIR__.'/database.php';

//create table
Capsule::schema()->create('tasks', function($table){
	$table->increments('id');
	$table->string('title');
	$table->string('body');
	$table->timestamps();
});

echo 'Table created successfully';