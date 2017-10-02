<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Sep 2017 09:49:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Event
 * 
 * @property int $id
 * @property string $subject
 * @property string $body
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
		'subject',
		'body'
	];

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class);
	}
}
