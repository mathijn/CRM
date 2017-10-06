<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 05 Oct 2017 20:58:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Education
 * 
 * @property int $id
 * @property int $employee_id
 * @property string $education
 * @property string $school
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Employee $employee
 *
 * @package App\Models
 */
class Education extends Eloquent
{
	protected $casts = [
		'employee_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'employee_id',
		'education',
		'school',
		'date'
	];

	public function employee()
	{
		return $this->belongsTo(\App\Models\Employee::class);
	}
}
