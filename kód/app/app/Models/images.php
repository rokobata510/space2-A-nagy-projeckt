<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
	protected $table = 'images';
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'link', 'solution',
	];
}
