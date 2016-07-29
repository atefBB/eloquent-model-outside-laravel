<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Task extends Eloquent {
	protected $fillable = [
		'title',
		'body'
	];
}