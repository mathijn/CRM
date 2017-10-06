<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 19:35:08 +0000.
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
 * @package App\Models
 */
class Event extends Eloquent
{
	protected $fillable = [
		'subject',
		'body'
	];
}
