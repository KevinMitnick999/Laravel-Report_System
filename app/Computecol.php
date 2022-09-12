<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computecol extends Model
{
    //
    protected $table = 'computecols';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'col1','col2', 'operator',
	];
}
