<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 19:35:07 +0000.
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
 * @property bool $finished
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
		'client_id' => 'int',
		'finished' => 'bool'
	];

	protected $fillable = [
		'subject',
		'body',
		'client_id',
		'finished'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class);
	}
}
