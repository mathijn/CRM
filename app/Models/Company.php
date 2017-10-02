<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 29 Sep 2017 09:49:00 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Company
 * 
 * @property int $id
 * @property string $name
 * @property string $website
 * @property string $street
 * @property string $number
 * @property string $zipcode
 * @property string $place
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Company extends Eloquent
{
	protected $fillable = [
		'name',
		'website',
		'street',
		'number',
		'zipcode',
		'place'
	];
}
