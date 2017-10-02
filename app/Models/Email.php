<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Sep 2017 09:49:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Email
 * 
 * @property int $id
 * @property string $subject
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Email extends Eloquent
{
	protected $fillable = [
		'subject',
		'body'
	];
}
