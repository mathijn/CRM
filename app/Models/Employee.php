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
 * @property string $placee
 * @property \Carbon\Carbon $birthdate
 * @property string $driver_licence
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
		'birthdate'
	];

	protected $fillable = [
		'name',
		'placee',
		'birthdate',
		'driver_licence',
		'job_title',
		'description'
	];
}
