<?php

namespace rrPrizeTool;

use Illuminate\Database\Eloquent\Model;

use rrPrizeTool\Roam;

class Drawing extends Model {

	protected $table = 'drawings';
	public $timestamps = false;

	public function Roam()
	{
		return $this->belongsTo('Roam', 'RoamID');
	}

}
