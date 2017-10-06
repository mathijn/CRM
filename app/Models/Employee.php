<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 19:35:08 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Employee
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $place
 * @property \Carbon\Carbon $birth_date
 * @property string $driver_license
 * @property string $job_title
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $experiences
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
		'driver_license',
		'job_title',
		'description'
	];

	public function experiences()
	{
		return $this->hasMany(\App\Models\Experience::class);
	}


	public function getFullNameAttribute()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
