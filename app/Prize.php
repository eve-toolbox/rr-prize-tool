<?php

namespace rrPrizeTool;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model {

	protected $table = 'prizes';
	public $timestamps = false;

	public function Item()
	{
		return $this->hasOne('Item', 'ItemID');
	}

	public function Drawing()
	{
		return $this->belongsTo('Drawing', 'DrawingID');
	}

	public function Winner()
	{
		return $this->belongsTo('Account', 'CharID');
	}

}