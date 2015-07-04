<?php

namespace rrPrizeTool;

use Illuminate\Database\Eloquent\Model;

class Account_Drawing extends Model {

	protected $table = 'accounts_drawings';
	public $timestamps = false;

	public function Account()
	{
		return $this->hasOne('Account', 'CharID');
	}

	public function Drawing()
	{
		return $this->hasOne('Drawing', 'DrawingID');
	}

	public function Roam()
	{
		return $this->hasOne('Roam', 'RoamID');
	}

}