<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Sep 2017 09:49:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Action
 * 
 * @property int $id
 * @property string $subject
 * @property string $body
 * @property int $client_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Client $client
 *
 * @package App\Models
 */
class Action extends Eloquent
{
	protected $casts = [
		'client_id' => 'int'
	];

	protected $fillable = [
		'subject',
		'body',
		'client_id'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class);
	}
}
