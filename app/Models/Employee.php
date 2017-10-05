<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 03 Oct 2017 12:50:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Employee
 * 
 * @property int $id
 * @property string $name
 * @property string $place
 * @property \Carbon\Carbon $birth_date
 * @property string $driver_license
 * @property string $job_title
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Employee extends Eloquent
{
	protected $dates = [
		'birth_date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'place',
		'birth_date',
		'driver_licence',
		'job_title',
		'description'
	];

	public function getFullNameAttribute()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
