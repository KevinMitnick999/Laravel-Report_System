<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combocol extends Model
{
    //
    protected $table = 'combocols';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'valcode','valdesc',
	];
}
