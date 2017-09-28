<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 26 Sep 2017 11:24:09 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Event
 * 
 * @property int $id
 * @property string $name
 * @property string $event
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 *
 * @package App\Models
 */
class Event extends Eloquent
{
	protected $fillable = [
		'name',
		'event'
	];

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class);
	}
}
